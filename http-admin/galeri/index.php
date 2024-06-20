<?php 

	$sql = mysqli_query($con, "SELECT * FROM tb_galeri"); 

 ?>
	<!-- Button Modal -->
	<a href="#tambahGaleri" type="button" class="btn btn-primary" data-toggle="modal" >
		<i class="fa fa-plus"></i>&nbsp;Tambah Data
	</a>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="tambahGaleri" tabindex="-1" aria-labelledby="tambahGaleriLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="tambahGaleriLabel">Form Tambah Data Galeri</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<label for="file">Upload Gambar</label>
	        		<input type="file" name="file" class="form-control" required />
	        	</div>
	        <?php //endforeach; ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="submit" class="btn btn-primary">Save</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- <table id="datatable-buttons" class="table table-striped table-bordered"> -->
	<table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>No</td>
				<td>Gambar Galeri</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
        <?php $no = 1; foreach($sql as $data): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><img src="../assets/frontend/galeri/<?= $data['image']; ?>" width="80"></td>
				<td>
					<a href="#updateGaleri<?= $data['id_galeri']; ?>" data-toggle="modal" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>&nbsp;Edit</a> 
					<a href="index.php?page=hapus-galeri&id=<?= $data['id_galeri']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
					<?php include "edit.php"; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>


<?php 

	if(isset($_POST['submit'])) {
		// Set Upload file
		$ekstensi_boleh = array('png', 'jpg');
		$img = $_FILES['file']['name'];
		$ex = explode('.', $img);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_boleh) === true) {
			if($ukuran < 2000000) {
				move_uploaded_file($file_tmp, '../assets/frontend/galeri/'. $img);
				$sql = mysqli_query($con, "INSERT INTO tb_galeri VALUES ('', '$img')");
				echo "<script>alert('Berhasil')</script>";
				echo "<script>window.location.href='index.php?page=galeri'</script>";
			} else {
				echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
			}
		} else {
			echo "<script>alert('Ekstensi tidak sesuai')</script>";
		}

	}
 ?>