<?php

class FrontController {

    const DEFAULT_CONTROLLER = "IndexController";
    const DEFAULT_ACTION = "showIndexView";

    public function __construct() {
        return $this;
    }

    static function run() {
        require 'core/View.php';
        $config = require 'core/Configuration.php';

        $controllername = !empty($_GET['controller']) ? $_GET['controller'] . 'Controller' : self::DEFAULT_CONTROLLER;
        $actionname = !empty($_GET['action']) ? $_GET['action'] : self::DEFAULT_ACTION;

        $pathcontroller = $config->get('controllerfolder') . $controllername . '.php';

        is_file($pathcontroller) ? require $pathcontroller : die('Controller osztály nem található - 404');

        if(is_callable(array($controllername, $actionname)) == true) {
            trigger_error($controllername . '->' . $actionname . ' nem létezik.', E_USER_NOTICE);
            return false;
        }

        $controller = new $controllername();
        $controller->$actionname();
    }
}
