<?php
/**
 * Error Controller
 */
class ErrorController extends BaseController
{
    public function index() {}

    public function error($message = 'Unknown error.')
    {
        echo '<pre>' . print_r($message, 1) . '</pre>';
    }
}
