<?php 
	include "config/config.php";
	// session_start();

	if (isset($_POST['login'])) {

		$email = htmlentities($_POST['email']);
		$pass = htmlentities($_POST['password']);
		$salt = "@siswa_studentsite";

		$pass_crypt = sha1(sha1($email).sha1($pass).$salt);

		$query = $db_conn->prepare("SELECT * FROM siswa WHERE email=:email AND password=:password");
		$query->bindParam(":email", $email);
		$query->bindParam(":password", $pass_crypt);
		$query->execute();
		$var=$query->fetch(PDO::FETCH_ASSOC);

		if (count($var)>0 && $pass_crypt==$var['password']) {
			$lastlogin=date("Y-m-d h:i:s");

			$query2 = $db_conn->prepare("UPDATE siswa SET lastlogin =:lastlogin WHERE email = :email");
			$query2->bindParam(":lastlogin", $lastlogin);
			$query2->bindParam(":email", $email);
			$query2->execute();

			$_SESSION['email']=$email;
			
			header("location:/studentsite-sma/user");
		} else {
			echo "<script>alert('Ngga ada')</script>";
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

		<title>Login</title>

		<link rel="stylesheet" href="/studentsite-sma/assets/css/login_style.css">
		<link rel="stylesheet" href="/studentsite-sma/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/studentsite-sma/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/studentsite-sma/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="/studentsite-sma/assets/css/style.css">

		<script src="/studentsite-sma/assets/js/jquery.js"></script>
		<script src="/studentsite-sma/assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include "layout/header.php" ?>
		<div class="login">
		<div class="sealinked-logo">
			<p>Logo Studentsite</p>
		</div>
		
		<form method="POST" class="form-horizontal">
			<div class="form-group">
		    	<div class="input-group col-md-9 col-sm-9 login-centered">
		    		<div class="input-group-addon form"><i class="fa fa-id-card"></i></div>
		    		<input type="email" class="form-control form" id="email" name="email" placeholder="Email">
		    	</div>
		    </div>

		    <div class="form-group">
		    	<div class="input-group col-md-9 col-sm-9 login-centered">
		    		<div class="input-group-addon form"><i class="fa fa-unlock fa-lg"></i></div>
		    		<input type="password" class="form-control form" id="password" name="password" placeholder="Password">
		    	</div>
		    </div>

			<div class="form-group">
			   	<div class="input-group col-md-9 col-sm-9 login-centered">
				    <button type="submit" id="login" name="login" class="btn btn-primary col-md-12 login-centered">Login</button>
			    </div>
			</div>

			<div class="form-group">
				<div class="col-md-2 reg">
					<a href="register">Register</a>
				</div>
			</div>
		</form>
	</div>
	<?php include "layout/footer.php"; ?>
	</body>
	</html>	