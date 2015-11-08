<?php
define('SITE_PATH', realpath(dirname(__FILE__)) . '/');

// Require necessary files
require_once(SITE_PATH . 'application/Request.php');
require_once(SITE_PATH . 'application/Router.php');
require_once(SITE_PATH . 'application/BaseController.php');
require_once(SITE_PATH . 'application/BaseModel.php');
require_once(SITE_PATH . 'application/Load.php');
require_once(SITE_PATH . 'application/Registry.php');
require_once(SITE_PATH . 'controllers/ErrorController.php');

try {
    Router::route(new Request);
} catch (Exception $e) {
    $controller = new ErrorController;
    $controller->error($e->getMessage());
}
