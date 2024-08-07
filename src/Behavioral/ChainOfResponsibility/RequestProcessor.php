<?php

namespace src\Behavioral\ChainOfResponsibility;

class RequestProcessor
{

    private MiddlewareChainHandler $middlewareHandler;

    /**
     * @param MiddlewareChainHandler $middlewareHandler
     */
    public function __construct(MiddlewareChainHandler $middlewareHandler)
    {
        $this->middlewareHandler = $middlewareHandler;
    }

    public function processRequest(Request $request)
    {
        print_r("Processing request... \n");
        sleep(1);

        if (!$this->middlewareHandler->handle($request)) {
            return new Response(500, "Error Processing request \n");
        }

        return new Response(200, "Request is Successfully processed \n");
    }
}