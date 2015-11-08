<?php
/**
 * Router
 * This class requires in the controller and calls method by Request
 */
class Router
{
    public static function route(Request $request)
    {
        $controller = $request->getController() . 'Controller';
        $method     = $request->getMethod();
        $args       = $request->getArguments();

        $controllerFile = SITE_PATH . 'controllers/' . $controller . '.php';

        /* Given that controllerFile exists and is readable,
           include the file, instantiate controller-class and call method
           (default 'index') */
        if ( is_readable($controllerFile) )
        {
            require_once($controllerFile);

            $controller = new $controller;
            $method     = ( is_callable([$controller, $method]) ) ? $method: 'index';

            if ( !empty($args) ) {
                call_user_func_array([$controller, $method], $args);
            } else {
                call_user_func([$controller, $method]);
            }
            return;
        }
        throw new Exception('404 -  ' . $controller . ' not found');        
    }
}
