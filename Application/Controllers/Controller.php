<?php

abstract class Controller {
    private $method;
    
    public function __construct($method) {
        $this->method = $method;
    }
    
    public function __invoke() {
        return [$this, $this->method];
    }

}
