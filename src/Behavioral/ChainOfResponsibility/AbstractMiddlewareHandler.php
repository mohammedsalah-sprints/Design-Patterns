<?php

namespace src\Behavioral\ChainOfResponsibility;

class AbstractMiddlewareHandler implements MiddlewareChainHandler
{

    private ?MiddlewareChainHandler $nextHandler = null;

    function handle(Request $request)
    {
        if($this->nextHandler != null){
            return $this->nextHandler->handle($request);
        }

        return true;
    }

    function setNext(MiddlewareChainHandler $next)
    {
        $this->nextHandler = $next;

        return $next;
    }
}