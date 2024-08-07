<?php

namespace src\Behavioral\ChainOfResponsibility;

class CorsMiddleware extends AbstractMiddlewareHandler
{
    private $isCors;

    /**
     * @param $isCors
     */
    public function __construct($isCors)
    {
        $this->isCors = $isCors;
    }

    public function handle(Request $request)
    {
        if(!$this->isCors) return false;

        return parent::handle($request);
    }
}