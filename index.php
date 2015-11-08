<?php

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');

// Require necessary files
require_once(SITE_PATH . 'application/Request.php');
require_once(SITE_PATH . 'application/Router.php');
require_once(SITE_PATH . 'application/BaseController.php');
require_once(SITE_PATH . 'application/BaseModel.php');
require_once(SITE_PATH . 'application/Load.php');
require_once(SITE_PATH . 'application/Registry.php');
require_once(SITE_PATH . 'controllers/IndexController.php');

//echo '<pre>' . print_r(get_included_files(), 1) . '</pre>';

$controller = new indexController;

call_user_func([
    $controller, 'index'
]);

//echo '<pre>' . print_r($registry->myVar, 1) . '</pre>';
