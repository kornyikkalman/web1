<?php

class EmailModel {

    protected $database;

    public function __construct () {
        require_once 'core/SPDO.php';
        $this->database = SPDO::singleton();
    }

}