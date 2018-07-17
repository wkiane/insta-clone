<?php
    loadController('Users');

    class Fotos extends Controller {

        public function __construct() {
            $this->fotoModel = $this->model('Foto');
        }

        public function index() {
            // get fotos
            $fotos = $this->fotoModel->listarFotos();
            $data = [
                'fotos' => $fotos,
            ];
            $this->loadTemplate('fotos/index', $data);
        }

        public function novaFoto() {
            $data = [];

            // is logged in
            if(isLoggedIn()) {
                $this->loadTemplate('fotos/novaFoto', $data);
            } else {
                redirect('users/login');
            }
        }

        public function addFoto() {
            $data = [];

            // 
            if(isLoggedIn()){
                $this->fotoModel->saveFoto();
            } else {
                redirect('users/login');
            }
        }
    }