<?php

namespace src\Behavioral\ChainOfResponsibility;

class Request
{
   private $method;
   private $url;

    /**
     * @param $method
     * @param $url
     */
    public function __construct($method, $url)
    {
        $this->method = $method;
        $this->url = $url;
    }
}