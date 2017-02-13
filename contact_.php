<?php
	include "config/config.php";

	if (isset($_POST['kirim'])) {
		$nama = htmlentities($_POST['nama']);
		$nis = htmlentities($_POST['nis']);
		$email = htmlentities($_POST['email']);
		$isi = htmlentities($_POST['isi']);
		$tgl=date("Y-m-d h:i:s");

		// $jml_user = $db_conn->prepare("SELECT * FROM keluhan");
		// $jml_user->execute();
		// $total = $jml_user->rowCount();
		// $total++;

		$query = $db_conn->prepare("INSERT INTO studentsite.keluhan(nama,nis,email,isi_keluhan,waktu) VALUES (:nama,:nis,:email,:isi,CURRENT_TIMESTAMP)");
		$query->bindParam(":id", $total);
		$query->bindParam(":nama", $nama);
		$query->bindParam(":nis", $nis);
		$query->bindParam(":email", $email);
		$query->bindParam(":isi", $isi);
		$query->bindParam(":tanggal", $tgl);
		$query->execute();
		if ($query) {
			header("location:/studentsite-sma/");
		}
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Contact Us</title>

	<link rel="stylesheet" href="/studentsite-sma/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/studentsite-sma/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/studentsite-sma/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/studentsite-sma/assets/css/style.css">

	<script src="/studentsite-sma/assets/js/jquery.js"></script>
	<script src="/studentsite-sma/assets/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include "layout/header.php";
	?>
	<div class="container article">
		<div class="row">
			<h1 class="text-center">CONTACT US</h1>
			<hr>
			<div class="col-md-8 centered">
					<div class="col-md-12 col-sm-12">
					<form method='post'>
						<div class='data'>
							<input class='form-control lowong' name='nama' type='text' placeholder='NAMA*' required>
							<input class='form-control lowong' name='nis' type='text' placeholder='NIS*' required>
							<input class='form-control lowong' name='email' type='email' placeholder='EMAIL*' required>
							<textarea class='form-control lowong-isi' name='isi' type='text' placeholder='ISI PESAN*' required></textarea>
							<input type="submit" class='btn btn-info pull-right' name="kirim" value="Kirim">
						</div>
					</form>
					</div>
			</div>
		</div>
	</div>
	<?php include "layout/footer.php"; ?>
</body>
</html>