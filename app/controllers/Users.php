<?php
    class Users extends Controller {
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function register() {
            // check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process the form
                // sanatize POST DATA
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'title' => 'Registrar',
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'email2' => trim($_POST['email2']),
                    'pass' => trim($_POST['pass']),
                    'pass2' => trim($_POST['pass2']),
                    // err
                    'name_err' => '',
                    'email_err' => '',
                    'email2_err' => '',
                    'pass_err' => '',
                    'pass2_err' => '',
                ];

                // validate email
                if(empty($data['email'])) {
                    $data['email_err'] = 'Please enter email';
                } else {
                    if($this->userModel->findUserByEmail($data['email'])) {
                        $data['email_err'] = 'Email already exists';
                    }
                }

                // validate email comfirm
                if(empty($data['email2'])) {
                    $data['email2_err'] = 'Please comfirm your email';
                } else {
                    if($data['email'] != $data['email2']) {
                        $data['email2_err'] = 'The email does not match';
                    }
                }
                
                 // validate name
                if(empty($data['name'])) {
                    $data['name_err'] = 'Please enter name';
                }
                // validate password
                if(empty($data['pass'])) {
                    $data['pass_err'] = 'Please fill the password field';
                } elseif(strlen($data['pass']) < 6 ) {
                    $data['pass_err'] = 'The password must be at least 6 characters long';
                }
                // validate comfirm password
                if(empty($data['pass2'])) {
                    $data['pass2_err'] = 'Please comfirm your password';
                } else {
                    if($data['pass'] != $data['pass2']) {
                        $data['pass2_err'] = 'Passwords do not match';
                    }
                }
                // check if errors are empty
                if(empty($data['name_err']) && empty($data['email_err']) && empty($data['email2_err']) && empty($data['pass_err']) && empty($data['pass2_err'])) {
                    // validated
                    die('SUCCESS');
                } else {
                    $this->loadTemplate('users/register', $data);
                }

            } else {
                // load the form
                $data = [
                    'title' => 'Registrar',

                    'name' => '',
                    'email' => '',
                    'email2' => '',
                    'pass' => '',
                    'pass2' => '',
                    // err
                    'name_err' => '',
                    'email_err' => '',
                    'email2_err' => '',
                    'pass_err' => '',
                    'pass2_err' => '',
                ];
                // load view
                $this->loadTemplate('users/register', $data);      
            }
        }

        public function login() {
            // check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process the form
                // sanatize POST DATA
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'title' => 'Registrar',
                    'email' => trim($_POST['email']),
                    'pass' => trim($_POST['pass']),
                    // err
                    'email_err' => '',
                    'pass_err' => '',
                ];
                 // validate email
                if(empty($data['email'])) {
                    $data['email_err'] = 'Please enter email';
                }
                // validate password
                if(empty($data['pass'])) {
                    $data['pass_err'] = 'Please fill the password field';
                } elseif(strlen($data['pass']) < 6 ) {
                    $data['pass_err'] = 'The password must be at least 6 characters long';
                }
                // validate comfirm password
                if(empty($data['pass2'])) {
                    $data['pass2_err'] = 'Please comfirm your password';
                } else {
                    if($data['pass'] != $data['pass2']) {
                        $data['pass2_err'] = 'Passwords do not match';
                    }
                }
                // check if errors are empty
                if(empty($data['email_err'])&& empty($data['pass_err'])) {
                    // validated
                    die('SUCCESS');
                } else {
                    $this->loadTemplate('users/login', $data);
                }


            } else {
                // load the form
                $data = [
                    'title' => 'Entrar',
                    'email' => '',
                    'pass' => '',
                    'email_err' => '',
                    'pass_err' => ''
                ];
                // load view
                $this->loadTemplate('users/login', $data);
            }
            
        }
    }