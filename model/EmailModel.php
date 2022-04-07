<?php

class EmailModel {

    protected $database;

    public function __construct () {
        require_once 'libs/SPDO.php';
        $this->database = SPDO::singleton();
    }



}