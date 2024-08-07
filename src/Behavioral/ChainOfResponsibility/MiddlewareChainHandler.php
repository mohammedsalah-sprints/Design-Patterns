<?php

namespace src\Behavioral\ChainOfResponsibility;

interface MiddlewareChainHandler
{
    function handle(Request $request);
    function setNext(MiddlewareChainHandler $next);
}