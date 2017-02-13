<?php 
	include "config/config.php";
	if(!isset($_GET['judul'])) {
		header("location:.");
	} elseif (isset($_GET['judul'])) {
		$judul_db = str_replace("+", " ", $_GET['judul']);
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

	<title>Pengumuman <?php echo "$judul_db"; ?></title>

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
		include "layout/article.php";
		include "layout/footer.php";
	?>
</body>
</html>