<?php

class RegisterController {

    public function __construct () {
        require_once 'model/ImageModel.php';
        $this->view = new View();
        $this->imageModel = new ImageModel();
    }

    public function renderGalleryView () {
        $this->view->render('galleryview.php', null);
    }
}