<?php
error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.

ini_set("error_log", "/opt/lampp/htdocs/programacionWebDinamicaTpUno/php-error.log");
error_log( "Hello, errors!" );

require 'vendor/autoload.php';
require 'src/routes.php';