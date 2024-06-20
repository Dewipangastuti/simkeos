<style>
@media screen and (max-width: 480px) {
	#datatable {
		overflow: scroll;
		max-width: 1000px;
	}
}
</style>
<?php 

	$sql = mysqli_query($con, "SELECT * FROM tb_pemasukan"); 

 ?>
	<!-- Button Modal -->
	<a href="#tambahPemasukan" type="button" class="btn btn-primary" data-toggle="modal" >
		<i class="fa fa-plus"></i>&nbsp;Tambah Pemasukan
	</a>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="tambahPemasukan" tabindex="-1" role="dialog" aria-labelledby="tambahPemasukanLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="tambahPemasukanLabel">Tambah Pemasukan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST">
	        	<div class="form-group">
	        		<label for="namaPenyewa">Nama Penyewa</label>
	        		<input type="varchar" name="nama" class="form-control" required  />
	        	</div>
	        	<div class="form-group">
	        		<label for="tanggal">Tanggal</label>
	        		<input type="date" name="tgl" class="form-control" required  />
	        	</div>
				<div class="form-group">
	        		<label for="nomorHp">Nomor HP</label>
	        		<input type="text" name="noHp" class="form-control" required />
	        	</div>
				<div class="form-group">
	        		<label for="barang">Barang yang disewa</label>
	        		<input type="text" name="brg" class="form-control" required />
	        	</div>
	        	<div class="form-group">
	        		<label for="tanggal">Keterangan</label>
	        		<input type="text" name="ket" class="form-control" required />
	        	</div>
	        	<div class="form-group">
	        		<label for="tanggal">Jumlah</label>
	        		<input type="number" name="jml" min="0" class="form-control" value="0" required />
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
	<table id="datatable" class="table table-striped table-bordered" style="max-width:100%;">
		<thead>
			<tr>
				<td>No</td>
				<td>Nama Penyewa</td>
				<td>Tanggal</td>
				<td>Nomor HP</td>
				<td>Barang yang disewa</td>
				<td>Keterangan</td>
				<td>Jumlah</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody  >
        <?php $no = 1; foreach($sql as $data): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= date("d-F-Y", strtotime($data['tanggal'])); ?></td>
				<td><?= $data['noHp']; ?></td>
				<td><?= $data['barang']; ?></td>
				<td><?= $data['keterangan']; ?></td>
				<td>Rp. <?= $data['jumlah']; ?></td>
				<td>
					<a href="#updatePemasukan<?= $data['id']; ?>" data-toggle="modal" class="btn btn-info"><i class="fa fa-edit"></i>&nbsp;Edit</a> 
					<a href="index.php?page=hapus-pemasukan&id=<?= $data['id']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
					<?php include "edit.php"; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

<?php 

	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tgl = $_POST['tgl'];
		$noHp = $_POST['noHp'];
		$brg = $_POST['brg'];
		$ket = $_POST['ket'];
		$jml = $_POST['jml'];

		$sql = mysqli_query($con, "INSERT INTO tb_pemasukan VALUES ('', '$nama', '$tgl','$noHp', '$brg','$ket', '$jml')");
		
		if($sql) {
			echo "<script>alert('Pemasukan berhasil ditambahkan')</script>";
			echo "<script>window.location.href='index.php?page=pemasukan'</script>";
		}
	}
 ?>
