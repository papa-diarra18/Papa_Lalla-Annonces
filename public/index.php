<?php
$requestUri = $_SERVER['REQUEST_URI'];
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

$path = str_replace($scriptName, '', $requestUri);
$path = trim($path, '/');
$path = strtok($path, '?'); 

switch($path){
    case '':
    case 'home':
        require_once __DIR__.'/../views/home/index.php';
        break;
    case 'login':
        require_once __DIR__.'/../views/auth/login.php';
        break;
    case 'register':
        require_once __DIR__.'/../views/auth/register.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}

?>