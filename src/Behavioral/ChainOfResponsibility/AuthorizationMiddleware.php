<?php

namespace src\Behavioral\ChainOfResponsibility;

class AuthorizationMiddleware extends AbstractMiddlewareHandler
{
    private $isAuthorized;

    /**
     * @param bool $isAuthorized
     */
    public function __construct(bool $isAuthorized)
    {
        $this->isAuthorized = $isAuthorized;
    }


    function handle(Request $request)
    {
        if(!$this->isAuthorized) return false;

        return parent::handle($request);
    }

}