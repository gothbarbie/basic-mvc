<?php
/**
 * Request
 * Turns the URI into Controller, Method and Arguments
 */
class Request
{
    private $_controller;
    private $_method;
    private $_args;

    public function __construct()
    {
        $uri   = strtolower($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri);
        $parts = array_filter($parts); // remove any empty elements

        $this->_controller = ($controller = array_shift($parts)) ? $controller: 'index';
        $this->_method     = ($method = array_shift($parts)) ? $method: 'index';
        $this->_args       = (isset($parts[0])) ? $parts: [];
    }

    public function getController()
    {
        return ucfirst($this->_controller);
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function getArguments()
    {
        return $this->_args;
    }
}
