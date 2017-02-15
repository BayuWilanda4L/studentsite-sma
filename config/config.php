<?php 
	try {
		$db_conn = new PDO("mysql:host=localhost;dbname=studentsite;", "root", "cobalutebak");
		// echo "berasil";
	} catch (PDOException $e) {
		die("Koneksi database error : ".$e->getMessage());
	}
	
	include_once 'user_class.php';
	$user = new user($db_conn);
?>