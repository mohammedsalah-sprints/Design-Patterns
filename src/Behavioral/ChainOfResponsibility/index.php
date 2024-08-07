<?php

use src\Behavioral\ChainOfResponsibility\AuthenticationMiddleware;
use src\Behavioral\ChainOfResponsibility\AuthorizationMiddleware;
use src\Behavioral\ChainOfResponsibility\CorsMiddleware;
use src\Behavioral\ChainOfResponsibility\Request;
use src\Behavioral\ChainOfResponsibility\RequestProcessor;
use src\Behavioral\ChainOfResponsibility\SecurityMiddleware;


require_once __DIR__.'/../../../vendor/autoload.php';

$middlewareList = [
    new AuthenticationMiddleware(true),
    new AuthorizationMiddleware(true),
    new SecurityMiddleware(true),
    new CorsMiddleware(false)
];


foreach ($middlewareList as $k => $middleware) {
    if ($k < count($middlewareList) - 1) {
        $middleware->setNext($middlewareList[$k + 1]);
    }
}


$request = new Request("GET", "/admin");
$requestProcessor = new RequestProcessor($middlewareList[0]);
$response = $requestProcessor->processRequest($request);

print_r($response->getStatus() . ', '. $response->getMessage());


/**
 * - Maintainability,  Duplication, Reusability, Extensibility
 */