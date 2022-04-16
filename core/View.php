<?php

class View
{
    protected $data = [];
    protected $errors = [];

    public function __construct () {

    }

    public function render ($viewname) {
        $config = Config::singleton();
        $viewpath = $config->get('viewfolder') . $viewname;

        if(is_file($viewpath)==false) {
            trigger_error('Az oldal:' . $viewpath . ' nem létezik', E_USER_NOTICE);
            return false;
        }
        
        require($viewpath);
    }

    public function set_data ($key, $value){
        $this->data[$key] = $value;
    }

    public function set_errors ($key, $value) {
        $this->errors[$key] = $value;
    }

}