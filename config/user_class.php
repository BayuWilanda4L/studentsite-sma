<?php 
	class user {
		private $db;
	
		function __construct($db_conn) {
			$this->db = $db_conn;
			session_start();
		}

		public function kirimkeluhan($nama,$nis,$email,$isi,$tgl) {
			try {
				$query = $this->db->prepare("INSERT INTO keluhan (nama, nis, email, isi_keluhan, waktu) VALUES (:nama, :nis, :email, :isi, :waktu)");
		        $query->bindParam(":nama", $nama);
		        $query->bindParam(":nis",$nis);
		        $query->bindParam(":email", $email);
		        $query->bindParam(":isi", $isi);
		        $query->bindParam(":waktu", $tgl);

		        $query->execute();

				return true;
			} catch (PDOException $e) {
				die("Error : ".$e->getMessage());
				return false;
			}
		}

		public function whoIsLoggedIn() {
			$query->$this->db_conn->prepare("SELECT * FROM siswa WHERE email=:email");
			$query->bindParam(":email", $_SESSION['email']);
			$query->execute();
			$var=$query->fetch(PDO::FETCH_ASSOC);
		}

		public function logout() {
			session_destroy();
			unset($_SESSION['email']);
			return true;
		}
		
	}