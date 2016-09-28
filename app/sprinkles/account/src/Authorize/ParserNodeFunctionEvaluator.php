<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2016 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\Account\Authorize;
 
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;
use PhpParser\PrettyPrinter\Standard as StandardPrettyPrinter;

/**
 * ParserNodeFunctionEvaluator class
 *
 * This class parses access control condition expressions.
 * 
 * @author Alex Weissman (https://alexanderweissman.com)
 * @see http://www.userfrosting.com/components/#authorization
 */
class ParserNodeFunctionEvaluator extends NodeVisitorAbstract
{

    /**
     * @var array[callable] An array of callback functions to be used when evaluating a condition expression.
     */ 
    protected $callbacks;
    /**
     * @var \PhpParser\PrettyPrinter\Standard The PrettyPrinter object to use (initialized in the ctor)
     */ 
    protected $prettyPrinter;
    /**
     * @var array The parameters to be used when evaluating the methods in the condition expression, as an array.
     */ 
    protected $params = []; 
    /**
     * @var bool Set to true if you want debugging information printed to the error log.
     */
    protected $debug;
    
    /**
     * Create a new ParserNodeFunctionEvaluator object.
     *
     * @param array $params The parameters to be used when evaluating the methods in the condition expression, as an array.
     * @param bool $debug Set to true if you want debugging information printed to the error log.
     */    
    public function __construct($callbacks, $debug = false)
    {
        $this->callbacks = $callbacks;
        $this->prettyPrinter = new StandardPrettyPrinter;
        $this->debug = $debug;
        $this->params = [];
    }

    public function leaveNode(Node $node)
    {
        // Look for function calls
        if ($node instanceof \PhpParser\Node\Expr\FuncCall) {
            $eval = new \PhpParser\Node\Scalar\LNumber;
            
            // Get the method name
            $callbackName = $node->name->toString();
            // Get the method arguments
            $argNodes = $node->args;
            
            $args = [];
            foreach ($argNodes as $arg) {
                $arg_string = $this->prettyPrinter->prettyPrintExpr($arg->value);
                // Resolve variables (placeholders and array paths)
                if (($arg->value instanceof \PhpParser\Node\Expr\BinaryOp\Concat) || ($arg->value instanceof \PhpParser\Node\Expr\ConstFetch)) {
                    $value = $this->resolveParamPath($arg_string);
                // Resolve arrays
                } else if ($arg->value instanceof \PhpParser\Node\Expr\Array_) {
                    $value = $this->resolveArray($arg);
                } else {
                    $value = $arg_string;
                }
                $args[] = $value;
            }
            
            if ($this->debug) {
                //echo "<pre>";
                error_log("Evaluating callback '$callbackName' on \n");
                error_log(print_r($args, true));
            }
            
            // Call the specified access condition callback with the specified arguments.
            if (isset($this->callbacks[$callbackName]) && is_callable($this->callbacks[$callbackName])) {
                $result = call_user_func_array($this->callbacks[$callbackName], $args);
            } else {
                throw new AuthorizationException("Authorization failed: Access condition method '$callbackName' does not exist.");
            }
            
            if ($this->debug) {
                error_log("Result: " . ($result ? "1" : "0"));
                //echo "</pre>";
            }
            
            return new \PhpParser\Node\Scalar\LNumber($result ? "1" : "0");
        }
    }
    
    public function setParams($params)
    {
        $this->params = $params;
    }
    
    /**
     * Resolve an array expression in a condition expression into an actual array.
     *
     * @param string $arg the array, represented as a string.
     * @return array[mixed] the array, as a plain ol' PHP array.
     */    
    private function resolveArray($arg)
    {
        $arr = [];
        $items = (array) $arg->value->items;
        foreach ($items as $item){
            if ($item->key)
                $arr[$item->key] = $item->value->value;
            else
                $arr[] = $item->value->value;
        }
        return $arr;
    }
    
    /**
     * Resolve a parameter path (e.g. "user.id", "post", etc) into its value.
     *
     * @param string $path the name of the parameter to resolve, based on the parameters set in this object.
     * @throws Exception the path could not be resolved.  Path is malformed or key does not exist.
     * @return mixed the value of the specified parameter.
     */
    private function resolveParamPath($path)
    {
        $pathTokens = explode(".", $path);
        $value = $this->params;
        foreach ($pathTokens as $token){
            $token = trim($token);
            if (is_array($value) && isset($value[$token])){
                $value = $value[$token];
                continue;
            } else if (is_object($value) && isset($value->$token)) {
                $value = $value->$token;
                continue;
            } else {
                throw new AuthorizationException("Cannot resolve the path \"$path\".  Error at token \"$token\".");
            }
        }
        return $value;
    }
}