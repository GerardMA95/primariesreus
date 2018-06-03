<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Form Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during forms for various
    | messages that we need to display to the user.
    |
    */
    'check_email_confirmation' => "Li hem enviat un correu a l'adreça electrònica facilitada per a que confirmi el seu registre. En cas de no rebre confirmació en 48 hores procedirem a esborrar les seves dades.",
    'save_success' => 'Dades desades correctament.',
    'save_danger' => 'Hi ha hagut un problema al desar les dades.',
    'delete_success' => 'Dades eliminades correctament.',
    'delete_danger' => 'Hi ha hagut un error al eliminar les dades.',
    'error_help_email' => 'Hi ha hagut un error amb la base de dades, contactar amb: '.config('mail.support_email'),
    'email_exist' => 'Aquest correu ja existeix.',
    'email_send_success' => 'Hem rebut el seu missatge, aviat rebrà una resposta. Moltes gràcies.',
    'error_recaptcha' => 'Ha de marcar la validació "No soc un robot".',

    'user_not_found' => "L'usuari no existeix o les dades han caducat.",
    'user_confirmation_success' => "Usuari adherit correctament.",
    'user_confirmation_error' => "No s'ha pogut confirmar l'usuari.",
    'user_already_confirmed' => "Aquest usuari ja està confirmat.",
];
