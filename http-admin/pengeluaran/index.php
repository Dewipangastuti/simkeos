<?php 

	$sql = mysqli_query($con, "SELECT * FROM tb_pengeluaran"); 

 ?>
	<!-- Button Modal -->
	<a href="#tambahPengeluaran" type="button" class="btn btn-primary" data-toggle="modal" >
		<i class="fa fa-plus"></i>&nbsp;Tambah Data
	</a>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="tambahPengeluaran" tabindex="-1" aria-labelledby="tambahPengeluaranLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="tambahPengeluaranLabel">Form Tambah Data Pengeluaran</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST">
	        	<div class="form-group">
	        		<label for="tanggal">Tanggal</label>
	        		<input type="date" name="tgl" class="form-control" required  />
	        	</div>
	        	<div class="form-group">
	        		<label for="keperluan">Keperluan</label>
	        		<input type="text" name="kep" class="form-control" required />
	        	</div>
				<div class="form-group">
	        		<label for="keterangan">Keterangan</label>
	        		<input type="text" name="ket" class="form-control" required />
	        	</div>
	        	<div class="form-group">
	        		<label for="jumlah">Jumlah</label>
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
	<table id="datatable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>No</td>
				<td>Tanggal</td>
				<td>Keperluan</td>
				<td>Keterangan</td>
				<td>Jumlah</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
        <?php $no = 1; foreach($sql as $data): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= date("d-F-Y", strtotime($data['tanggal'])); ?></td>
				<td><?= $data['keperluan']; ?></td>
				<td><?= $data['keterangan']; ?></td>
				<td>Rp. <?= $data['jumlah']; ?></td>
				<td>
					<a href="#updatePengeluaran<?= $data['id']; ?>" data-toggle="modal" class="btn btn-info"><i class="fa fa-edit"></i>&nbsp;Edit</a> 
					<a href="index.php?page=hapus-pengeluaran&id=<?= $data['id']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
					<?php include "edit.php"; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	
	<?php 
	if(isset($_POST['submit'])) {
		$tgl = $_POST['tgl'];
		$kep = $_POST['kep'];
		$ket = $_POST['ket'];
		$jml = $_POST['jml'];

		$sql = mysqli_query($con, "INSERT INTO tb_Pengeluaran VALUES ('', '$tgl', '$kep', '$ket', '$jml')");

		if($sql) {
			echo "<script>alert('berhasil')</script>";
			echo "<script>window.location.href='index.php?page=pengeluaran'</script>";
		}
	}
 ?>