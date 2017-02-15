<?php 
	include "/studentsite-sma/config/config.php";
	if (isset($_SESSION['email'])) {
		$session_login = $_SESSION['email'];
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Siswa</title>
</head>
<body>
	<?php echo "$session_login"; ?>
</body>
</html>