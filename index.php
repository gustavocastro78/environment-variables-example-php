<?php

/**
 * This short project is a example to explain the environment varibles uses.
 * 
 * @author  Gustavo Castro <developer.gustavocastro@gmail.com>
 * @version 0.1
 * @see https://medium.com/@ogustavocastro/utilizando-vari%C3%A1veis-de-ambiente-no-php-1c6d5e711b6f?sk=77afcd7bef078253ab341ca2622be021
 */

require_once('helpers/Environment.php');

use helpers\Environment;

Environment::load();

echo <<<HTML
    <!DOCTYPE html>
    <html>
        <head>
        <title>Environment Example</title>
        </head>
        <body>
            <div>
                <h1 style="color: {$_ENV['COLOR']}">{$_ENV['ENVIRONMENT']}</h1>
                <p>User: <strong>{$_ENV['USER']}</strong></p>
                <p>Password: <strong>{$_ENV['PASSWORD']}</strong></p>
                <p>URL Integration: <strong>{$_ENV['URL_INTEGRATION']}</strong></p>
                <p>Change environment in: <strong>environment.ini</strong></p>
            </div>
        </body>
    </html>
HTML;
