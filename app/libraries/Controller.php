<?php
    class Controller {
        // Load Model
        public function Model($model) {
            // require model file
            require_once '../app/models/'.$model.'.php';

            // instanciate the model
            return new $model();
        }

        // load view
        public function view($view, $data = []) {
            extract($data);
            // check view file
            if(file_exists('../app/views/'.$view.'.php')) {
                require_once '../app/views/'.$view.'.php';
            } else {
                // view does not exist
                die('View does not exist');
            }
        }
        

        // load template
        public function loadTemplate($view, $data = []) {
            extract($data);
            require '../app/views/template.php';
        }

        public function loadViewInTemplate($view, $data = []) {
            extract($data);
            if(file_exists(require '../app/views/' . $view . '.php')){
                require '../app/views/' . $view . '.php';
            }
        }

    }