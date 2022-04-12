<?php

class IndexController {
    public  function  __construct () {
        $this->view = new View();
    }

    public function renderIndexView () {
        $this->view->render('indexview.php', null);
    }
}