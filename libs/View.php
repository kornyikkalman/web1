<?php

class View
{
    public function __construct () {

    }

    public function show($viewName, $vars = array()) {
        $config = Config::singleton();
        $viewPath = $config->get('viewFolder') . $viewName;

        if(is_file($viewPath)==false) {
            trigger_error('Az oldal:' . $viewPath . ' nem létezik', E_USER_NOTICE);
            return false;
        }

        if(is_array($vars)) {
            foreach ($vars as $key => $value) {
                $key = $value;
            }
        }

        include $viewPath;
    }

}