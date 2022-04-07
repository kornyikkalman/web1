<?php

class Config {

    private  $vars;
    private static $instance;

    public function __construct() {
        $this->vars = array();
    }

    public function set($key, $value) {
        if(!isset($this->vars[$key])) {
            $this->vars[$key] = $value;
        }
    }

    public function get($key) {
        if(isset($this->vars[$key])) {
            return $this->vars[$key];
        }
    }

    public static function singleton() {
        if(!isset(self::$instance)) {
            $tmpClass = __CLASS__;
            self::$instance = new $tmpClass;
        }
        return self::$instance;
    }
}