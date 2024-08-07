<?php

namespace src\Behavioral\ChainOfResponsibility;

class SecurityMiddleware extends AbstractMiddlewareHandler
{

    private $isSecure;

    /**
     * @param $isSecure
     */
    public function __construct($isSecure)
    {
        $this->isSecure = $isSecure;
    }

    function handle(Request $request)
    {
        if (!$this->isSecure) return false;

        return parent::handle($request);
    }
}