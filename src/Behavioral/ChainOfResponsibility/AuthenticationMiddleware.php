<?php

namespace src\Behavioral\ChainOfResponsibility;

class AuthenticationMiddleware extends AbstractMiddlewareHandler
{

    private $isAuthenticated;

    /**
     * @param bool $isAuthenticated
     */
    public function __construct(bool $isAuthenticated)
    {
        $this->isAuthenticated = $isAuthenticated;
    }

    function handle(Request $request)
    {
        if(!$this->isAuthenticated) return false;

        return parent::handle($request);
    }
}