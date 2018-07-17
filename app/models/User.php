<?php
	class User {
		private $db;
		public function __construct() {
			// load db
			$this->db = new Database();
		}

		public function register($data) {
			$this->db->query('INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)');
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':nome', $data['name']);
			$this->db->bind(':senha', $data['pass']);
			if($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		public function login($email, $password) {
            $this->db->query('SELECT * FROM usuarios WHERE email = :email');
            $this->db->bind(':email', $email);
            
            $row = $this->db->single();

            // check the two passwords
            $hashed_password = $row->senha;
            if(password_verify($password, $hashed_password)) {
                return $row;
            } else {
                return false;
            }
        }

		public function findUserByEmail($email) {
			$this->db->query('SELECT * FROM usuarios WHERE email = :email');
			$this->db->bind(':email', $email);
			$row = $this->db->single();
			// check row
			if($this->db->rowCount() > 0) {
				return true;
			} else {
				return false;
			}
		}

	}
	