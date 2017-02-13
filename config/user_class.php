<?php 
	class user {
		private $db;
	
		function __construct($db_conn) {
			$this->db = $conn;
		}

		public function kirimkeluhan($nama,$nis,$email,$isi,$tgl) {
			try {
				$query = $this->db->prepare("INSERT INTO keluhan VALUES (:nama,:nis,:email,:isi,:tgl)");
				$query->bindParam(":nama", $nama);
				$query->bindParam(":nis", $nis);
				$query->bindParam(":email", $email);
				$query->bindParam(":isi", $isi);
				$query->bindParam(":tanggal", $tanggal);
				$query->execute();
				if ($query) {
					header("location:/studentsite-sma/");
				}

				return true;
			} catch (PDOException $e) {
				die("Error : ".$e->getMessage());
				return false;
			}
		}
	}