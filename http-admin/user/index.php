<div class="row">
	<div class="col-md-4">
		<div class="card" style="border-top: 4px solid #00a9c7">
			<div class="card-body d-flex justify-content-center">
				<img src="../assets/backend/images/<?= $data['image'] ?>" width="200" class="img-fluid img-thumbnail">
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card" style="border-top: 4px solid #00a9c7">
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="user">Username</label>
								<input type="text" class="form-control" name="user" value="<?= $data['username'] ?>" required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pass" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="img">Upload Avatar</label>
								<input type="file" class="form-control" name="img" />
							</div>
						</div>
						<div class="col-md-12 mt-3">
							<button class="btn btn-success btn-block" type="submit" name="update" style="background: #00a9c7!important; border-color: #00a9c7;">Simpan Perubahan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col md-12">
		<div class="card" style="border-top: 4px solid #00a9c7">
			<div class="card-header">
				<h3 class="text-center">Tambah User</h3>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="user">Username</label>
								<input type="text" class="form-control" name="user" required  />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pass" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="img">Upload Avatar</label>
								<input type="file" class="form-control" name="img" />
							</div>
						</div>
						<div class="col-md-12 mt-3">
							<button class="btn btn-success btn-block" type="submit" name="tambah" style="background: #00a9c7!important; border-color: #00a9c7;">Simpan Perubahan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	
	if(isset($_POST['update'])) {
		$id = $_SESSION['id'];
		$user = $_POST['user']; 
		$pass = $_POST['pass'];
		
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpg');
		$gambar = $_FILES['img']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['img']['size'];
		$file_tmp = $_FILES['img']['tmp_name'];

		$sql= mysqli_query($con, "SELECT * FROM tb_user WHERE id='$id'");
		$data = mysqli_fetch_array($sql);

			if(!empty($gambar)) {
				if(in_array($ekstensi, $ekstensi_boleh) === true) {
					if($ukuran < 2000000) {
						move_uploaded_file($file_tmp, '../assets/backend/images/'. $gambar);
						$sql = mysqli_query($con, "UPDATE tb_user SET username='$user', password='$pass', image='$gambar' WHERE id='$id'");
 						echo "<script>alert('Data Berhasil Di ubah!')</script>";
						echo "<script>window.location.href='index.php?page=detail-user'</script>";
					}
				} 
			} else {
				if(!empty($pass)) {
					$gambar = $data['image'];
					$sql = mysqli_query($con, "UPDATE tb_user SET username='$user', password='". md5($pass) ."', image='$gambar' WHERE id='$id'");
					echo "<script>alert('Data Berhasil Di ubah!')</script>";
					echo "<script>window.location.href='index.php?page=detail-user'</script>";
				} else {
					echo "<script>alert('Password Wajib Diisi!')</script>";
				}
			}
	}

 ?>
 <?php 

 	if(isset($_POST['tambah'])) {
 		$user = $_POST['user'];
		$pass = md5($_POST['pass']);

		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpg');
		$gambar = $_FILES['img']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['img']['size'];
		$file_tmp = $_FILES['img']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 2000000) {
					move_uploaded_file($file_tmp, '../assets/backend/images/'. $gambar);
					$sql = mysqli_query($con, "INSERT INTO tb_user VALUES ('', '$user', '$pass', '$gambar')");

					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=detail-user'</script>";
				} else {
					echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
				}
			} else {
				echo "<script>alert('Ekstensi tidak sesuai')</script>";
			}
 	}

  ?>

