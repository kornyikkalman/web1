<?php

class RegisterController {

    public function __construct () {
        require_once 'model/ImageModel.php';
        $this->view = new View();
        $this->imageModel = new ImageModel();
    }

    public function showGalleryView() {
        $this->view->show('galleryView.php', null);
    }
}