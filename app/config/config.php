<?php
    // *** ALERT - REMEMBER TO CHANGE THE FOLDER NAME IN THE HTACCESS ON THE PUBLIC FOLDER ***
    define('SITE_NAME', 'Instagram');
    $enviroment = 'development';

    if($enviroment == 'development') {
        define('BASE_URL', 'http://localhost/traversy_mvc_projects/mini-instagram');
        define('APP_ROOT', dirname(dirname(__FILE__)));
        // DB Params
        define('DB_HOST', "localhost");
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'galeria-de-fotos');
        
    } elseif($enviroment == 'production') {
        define('BASE_URL', '');
        define('APP_ROOT', '');
        // DB params
        define('DB_HOST', '');
        define('DB_USER', '');
        define('DB_PASS', '');
        define('DB_NAME', '');
    }