<?php

class UploadController {

    public function __construct () {
        require_once 'model/ImageModel.php';
        $this->view = new View();
        $this->imageModel = new ImageModel();
    }

    public function showUploadView() {
        $this->view->show('uploadView.php', null);
    }
}
