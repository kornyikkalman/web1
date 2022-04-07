<?php

class FrontController {

    const DEFAULT_CONTROLLER = "IndexController";
    const DEFAULT_ACTION = "showIndexView";

    public function __construct() {
        return $this;
    }

    static function startKernel() {
        require 'libs/View.php';
        $config = require 'libs/Configuration.php';

        $controllerName = !empty($_GET['controller']) ? $_GET['controller'] . 'Controller' : self::DEFAULT_CONTROLLER;
        $actionName = !empty($_GET['action']) ? $_GET['action'] : self::DEFAULT_ACTION;

        $pathController = $config->get('controllerFolder') . $controllerName . '.php';

        is_file($pathController) ? require $pathController : die('Controller osztály nem található - 404');

        if(is_callable(array($controllerName, $actionName)) == true) {
            trigger_error($controllerName . '->' . $actionName . ' nem létezik.', E_USER_NOTICE);
            return false;
        }

        $controller = new $controllerName();
        $controller->$actionName();
    }
}
