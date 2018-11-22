<?php

//switch ($_SERVER['HTTP_ORIGIN']) {
//    case 'http://myproject.ll:8080': case 'http://admin.myproject.ll:8080':
//    header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
//    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
//    header('Access-Control-Max-Age: 1000');
//    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
//    break;
//}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");