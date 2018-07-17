<?php
    class Foto {
        private $db;
		public function __construct() {
			// load db
			$this->db = new Database();
        }

        public function listarFotos() {
            $this->db->query('SELECT u.nome, u.id as user_id, f.url, f.created_at, f.titulo, f.id
            AS foto_id FROM usuarios AS u JOIN fotos AS f ON u.id = f.user_id ORDER BY f.id DESC');
            $results = $this->db->resultSet();
            return $results;
        }


        public function saveFoto() {
           if(isset($_POST['enviar']))
            {
                $foto = $_FILES['arquivo'];
                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
                // print_r($foto);
                // die();
                // check for erros
                if($foto['error'] != 0) {
                    die('File upload error: ' . $foto['error']);
                }

                // check if is image
                if(in_array($foto['type'], $permitidos))
                {
                    $nome = md5(time().rand(0, 999)).'.jpeg';
                    move_uploaded_file($foto['tmp_name'], ROOT.'/public/img/pics/'.$nome);

                    $titulo = '';
                    if(isset($_POST['titulo']) && !empty($_POST['titulo']))
                    {
                        $titulo = $_POST['titulo'];
                    };
                    
                    $user_id = $_SESSION['user_id'];

                    echo $foto['tmp_name'];
                    $this->insert($titulo, $nome, $user_id);
                    // redirect('');
                }
            }
        }

        // insert img url to the db
        public function insert($titulo, $nome, $user_id) {
            $this->db->query('INSERT INTO fotos (titulo, url, user_id) VALUES (:titulo, :url, :user_id)');
            $this->db->bind(':titulo', $titulo);
            $this->db->bind(':url', $nome);
            $this->db->bind(':user_id', $user_id);
            if($this->db->execute()) {
                redirect('fotos');
            } else {
                die('error');
            };
        }

    }