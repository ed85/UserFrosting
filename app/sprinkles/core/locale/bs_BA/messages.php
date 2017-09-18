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
    "@PLURAL_RULE" => 1,

    "ABOUT" => "O Nama",

	"CAPTCHA" => [
	    "@TRANSLATION" => "Captcha",
        "FAIL" => "Niste pravilno unijeli captcha kod.",
        "SPECIFY" => "Unesite captcha",
        "VERIFY" => "Provjerite captcha"
    ],

    "CSRF_MISSING" => "CSRF token nije pronađen. Osvježite stranicu i pokušajte ponovo?",

    "DB_INVALID" => "Povezivanje sa bazom podataka nije moguće. Ako ste administrator, molimo pogledajte LOG fajl sa greškom.",
    "DESCRIPTION"   => "Opis",
    "DOWNLOAD" => [
        "@TRANSLATION" => "preuzimanje",
        "CSV" => "Preuzmi CSV"
    ],

    "EMAIL" => [
        "@TRANSLATION" => "Email",
        "YOUR" => "Vaša email adresa"
    ],

    "HOME"  => "Početna",

    "LEGAL" => [
        "@TRANSLATION" => "Prava korištenja",
        "DESCRIPTION" => "Naša pravna politika važi za vašu upotrebu ove web stranice i naših usluga."
    ],

    "LOCALE" => [
        "@TRANSLATION" => "Locale"
    ],

    "NAME"  => "Ime",
    "NAVIGATION" => "Navigacija",
    "NO_RESULTS" => "Žao nam je, ali ovdje nema ništa za pokazati.",

    "PAGINATION" => [
        "GOTO" => "Idi na stranicu",
        "SHOW" => "Prikaži",

        // Paginator
        // possible variables: {size}, {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
        // also {page:input} & {startRow:input} will add a modifiable input in place of the value
        "OUTPUT" => "{startRow} do {endRow} od {filteredRows} ({totalRows})",
        "NEXT" => "Slijedeča",
        "PREVIOUS" => "Prethodna",
        "FIRST" => "Prva stranica",
        "LAST" => "Zadnja stranica"
    ],
    "PRIVACY" => [
        "@TRANSLATION" => "Privatnost",
        "DESCRIPTION" => "Naša politika privatnosti opisuje koje vrste informacija sakupljamo od vas i kako ćemo je koristiti."
    ],

    "SLUG" => "Slug",
    "SLUG_CONDITION" => "Slug/Uslovi",
    "SLUG_IN_USE" => "<strong>{{slug}}</strong> slug već postoji",
    "STATUS" => "Status",
    "SUGGEST" => "Prijedlog",

    "UNKNOWN" => "Nepoznato",

    // Actions words
    "ACTIONS" => "Akcije",
    "ACTIVATE" => "Aktiviraj",
    "ACTIVE" => "Aktivno",
    "ADD" => "DOdaj",
    "CANCEL" => "Izađi",
    "CONFIRM" => "Potvrdi",
    "CREATE" => "Kreiraj",
    "DELETE" => "Obriši",
    "DELETE_CONFIRM" => "Da li ste sigurni da želite obrisati ovo?",
    "DELETE_CONFIRM_YES" => "Da, obriši",
    "DELETE_CONFIRM_NAMED" => "Da li ste sigurni da želite obrisati {{name}}?",
    "DELETE_CONFIRM_YES_NAMED" => "Da, obriši {{name}}",
    "DELETE_CANNOT_UNDONE" => "Ova akcija se ne može poništitie.",
    "DELETE_NAMED" => "Obriši {{name}}",
    "DENY" => "Odbi",
    "DISABLE" => "Onemogući",
    "DISABLED" => "Onemogućeno",
    "EDIT" => "Uredi",
    "ENABLE" => "Omogući",
    "ENABLED" => "Omogućeno",
    "OVERRIDE" => "Preuređivanje",
    "RESET" => "Poništi",
    "SAVE" => "Snimi",
    "SEARCH" => "Traži",
    "SORT" => "Sortiraj",
    "SUBMIT" => "Pošalji",
    "PRINT" => "Printaj",
    "REMOVE" => "Ukloni",
    "UNACTIVATED" => "Neaktivan",
    "UPDATE" => "Ažuriraj",
    "YES" => "Da",
    "NO" => "Ne",
    "OPTIONAL" => "Opcionalno",

    // Misc.
    //"BUILT_WITH_UF" => "Built with <a href=\"http://www.userfrosting.com\">UserFrosting</a>",
    //"ADMINLTE_THEME_BY" => "Theme by <strong><a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved",
	"BUILT_WITH_UF" => "",
    "ADMINLTE_THEME_BY" => "Sva prava zadržana",
    "WELCOME_TO" => "Dobro došao {{title}}!"
];
