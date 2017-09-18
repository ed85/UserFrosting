<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 *
 * BS Bosanski jezik preveden za 'core' zaslon.
 *
 * @package userfrosting\i18n\bs_BA
 * @author Edin Nukica
 */

return [
    "ERROR" => [
        "@TRANSLATION" => "Greška",

        "400" => [
            "TITLE" => "Greška 400: Loš zahtjev",
            "DESCRIPTION" => "Verovatno nije tvoja krivica.",
        ],

        "404" => [
            "TITLE" => "Greška 404: Nije pronađeno",
            "DESCRIPTION" => "Čini se da ne možemo pronaći ono što tražite.",
            "DETAIL" => "Pokušali smo da pronađemo vašu stranicu...",
            "EXPLAIN" => "Nismo mogli naći stranicu koju tražite.",
            "RETURN" => 'Bilo kako bilo, kliknite <a href="{{url}}">ovdje</a> da se vratite na naslovnu stranu.'
        ],

        "CONFIG" => [
            "TITLE" => "Problem sa konfiguracijom!",
            "DESCRIPTION" => "Neki od vaših zahtjeva za konfiguraciju nisu uspiješni.",
            "DETAIL" => "Nešto nije u redu.",
            "RETURN" => 'Molimo vas da ispravite sledeće greške, a onda osvježite stranicu <a href="{{url}}">ovdje</a>.'
        ],

        "DESCRIPTION" => "Prepoznali smo neku grešku u .",
        "DETAIL" => "Evo što imamo:",

        "ENCOUNTERED" => "Uhhh... nešto se dogodilo. Ne znamo šta.",

        "MAIL" => "Fatalna greška pri slanju pošte, molimo Vas da se obratite administratoru servera. Ako ste administrator, pogledajte u LOG fajl.",
        
        "RETURN" => 'Klikni <a href="{{url}}">ovdje</a> da biste se vratini na početnu stranicu.',

        "SERVER" => "Ups, izgleda da je naš server možda bio 'bezobrazan'. Ako ste administrator, pogledajte u PHP ili LOG fajl.",

        "TITLE" => "Neka greška više sile"
    ]
];
