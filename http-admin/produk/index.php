<?php 
	$sql = mysqli_query($con, "SELECT * FROM tb_produk"); 
?>
	<!-- Button Modal -->
	<a href="#tambahproduk" type="button" class="btn btn-primary" data-toggle="modal" >
		<i class="fa fa-plus"></i>&nbsp;Tambah Data
	</a>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="tambahproduk" tabindex="-1" aria-labelledby="tambahprodukLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
	    		<div class="modal-header">
					<h5 class="modal-title" id="tambahprodukLabel">Form Tambah Data Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        			<span aria-hidden="true">&times;</span>
	        		</button>
	    		</div>
	    <div class="modal-body">
	        <form method="POST" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<label for="nama">Nama Barang</label>
	        		<input type="varchar" name="nama_produk" class="form-control" required />
	        	</div>
	        	<div class="form-group">
	        		<label for="deskripsi">Deskripsi Barang</label>
	        		<textarea name="deskripsi_produk" class="form-control" required /></textarea>
	        	</div>
	        	<div class="form-group">
	        		<label for="harga">Harga Sewa</label>
	        		<input type="number" name="harga_produk" min="0" class="form-control" value="0" required />
	        	</div>
	        	<div class="form-group">
	        		<label for="image">Gambar</label>
	        		<input type="file" name="image" class="form-control" required />
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
				<td>Nama Produk</td>
				<td>Deskripsi</td>
				<td>Harga Sewa</td>
				<td>Gambar</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
        <?php $no = 1; foreach($sql as $data): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama_produk'] ?></td>
				<td><?= $data['deskripsi_produk']; ?></td>
				<td>Rp. <?= $data['harga_produk']; ?></td>
				<td><img src="../assets/img/produk/<?= $data['image']; ?>" width="80"></td>
				<td>
					<a href="#updateProduk<?= $data['id_produk']; ?>" data-toggle="modal" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>&nbsp;Edit</a> 
					<a href="index.php?page=hapus-produk&id=<?= $data['id_produk']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
					<?php include "edit.php"; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php 

	if(isset($_POST['submit'])) {
		$nama_produk = $_POST['nama_produk'];
		$deskripsi_produk = $_POST['deskripsi_produk'];
		$harga_produk = $_POST['harga_produk'];
		
		// Set Upload file
		$ekstensi_boleh = array('png','jpeg', 'jpg');
		$image = $_FILES['image']['name'];
		$ex = explode('.', $image);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_boleh) === true) {
			if($ukuran < 2000000) {
				move_uploaded_file($file_tmp, '../assets/img/produk/'. $image);
				$create = mysqli_query($con, "INSERT INTO tb_produk VALUES ('', '$nama_produk', '$deskripsi_produk','$harga_produk', '$image')");
				if ( $create === false ) {
					echo mysqli_error($con);
					exit;
				}else{
					echo "<script>alert('Berhasil')</script>";
					echo "<script>window.location.href='index.php?page=produk'</script>";
				}
			} else {
				echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
			}
		} else {
			echo "<script>alert('Ekstensi tidak sesuai')</script>";
		}

	}
?>