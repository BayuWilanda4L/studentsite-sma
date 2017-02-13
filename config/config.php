<?php 
	try {
		$db_conn = new PDO("mysql:host=localhost;dbname=studentsite;", "root", "cobalutebak");
	} catch (PDOException $e) {
		die("Koneksi database error : ".$e->getMessage());
	}
	

?>