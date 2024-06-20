<?php 
	session_start();
	include "../config/config.php";

	if(isset($_SESSION['user'])) {
		header("location:index.php?page=home");
	}

	if(isset($_POST['submit'])) {
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);

		$sql = mysqli_query($con, "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'");
		// Ambil data array
		$data = mysqli_fetch_array($sql);
		// Ambil data untuk Cek
		$cek = mysqli_num_rows($sql);
		if($cek > 0) {
			session_start();

			$_SESSION['id'] = $data['id'];
			$_SESSION['user'] = $data['username'];
			$_SESSION['img'] = $data['image'];

			// var_dump($_SESSION['img']);

			header("location:index.php?page=home");
		} else {
			echo "<script>alert('Maaf Username atau Password Salah')</script>";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-utilities.css">

	<!-- Font Awesome -->
	<link href="../assets/fontawesome/css/fontawesome.css" rel="stylesheet">
	<link href="../assets/fontawesome/css/brands.css" rel="stylesheet">
	<link href="../assets/fontawesome/css/solid.css" rel="stylesheet">

	<!-- CSS -->
	<style>
		body {
			background: linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.7)), url(../assets/img/background/bg-home.jpg);
			background-size: cover;
			width: 100%;
			height: 100vh;
		}
		.card {
			margin: 30% auto;
			width: 80%;
			border-radius: 20px;
			box-shadow: 5px 5px 15px #046677;
			background: linear-gradient(to top, white, #00a9c7);
		}
		.form-group {
			margin-top: 10px;
		}

		@media screen and (min-width: 720px) {
			.card {
				width: 45%;
				height: 55vh;
				margin: 10% auto;
			}
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="card bg-dark text-white">
				<div class="card-header">
					<h3 class="text-center" style="color: white; font-family:Arial, Helvetica, sans-serif;">
						SELAMAT DATANG
					</h3>
				</div>
				<div class="card-body">
					<div class="card-text">
						<form method="POST">
							<div class="form-group">
								<label for="user">Username</label>
								<input type="text" class="form-control" name="user" id="user" placeholder="Username" required />
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required />
							</div>
							<div class="form-group mt-3">
                                <div class="d-grid gap-2">
									<input type="submit" name="submit" class="btn text-white" value="LOGIN" style="background-color: #00a9c7;">
                                </div>
							</div>
						</form>
						<p class="text-center mt-3" style="color: #00a9c7;">
							&copy;&nbsp;Copyright 2022 | Dewi Pangastuti
						</p>
					</div>
				</div>
			</div>	
		</div>
	</div>

</body>
</html>