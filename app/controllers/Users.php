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
                    // hash password
                    $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
                    // register user
                    if($this->userModel->register($data)) {
                        flash('register_success', 'Conta criada com sucesso');
                        redirect('users/login');
                    } else {
                        die('Something went wrong');
                    };
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
                    $data['email_err'] = 'Por favor preencha o campo email';
                }
                // validate password
                if(empty($data['pass'])) {
                    $data['pass_err'] = 'Por favor preencha o campo senha';
                } elseif(strlen($data['pass']) < 6 ) {
                    $data['pass_err'] = 'Sua senha deve ter pelo menos 6 caracteres';
                }
                // validate comfirm password
                if(empty($data['pass2'])) {
                    $data['pass2_err'] = 'Por favor comfirme sua senha';
                } else {
                    if($data['pass'] != $data['pass2']) {
                        $data['pass2_err'] = 'As duas senhas não batem';
                    }
                }

                // check for user/email
                if($this->userModel->findUserByEmail($data['email'])) {
                    // user found
                } else {
                    // user not found
                    $data['email_err'] = 'Email não encontrado';
                }

                // check if errors are empty
                if(empty($data['email_err']) && empty($data['pass_err'])) {
                    // validated
                    // check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['pass']);

                    if($loggedInUser) {
                        // create session
                        die('SUCCESS');
                    } else {
                        $data['pass_err'] = 'Senha incorreta';
                        $this->loadTemplate('users/login', $data);
                    }
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