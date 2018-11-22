<?php

//View Errors
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('ROOT', dirname('__FILE__'));

require_once ROOT.'/src/API/configs/mainConfig.php';
require_once ROOT.'/vendor/autoload.php';

//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
//header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
    
require_once __DIR__."/vendor/autoload.php";

echo \src\API\instances\JsonRPCServer::run();
    

