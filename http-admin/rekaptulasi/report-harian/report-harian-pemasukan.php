<?php
	include "../../../config/config.php";

	$tgl = $_POST['choice'];

	$sql = mysqli_query($con, "SELECT * FROM tb_pemasukan WHERE tanggal='$tgl'");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Print Data</title>
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../../../assets/css/bootstrap-utilities.min.css">
	<style>
		.table {
			border-color: #000;
		}
		.table tr td {
			border-color: #000; 
		}
	</style>
</head>
<body>
	<div class="container-fluid p-3">
		<h3 class="text-center">DATA LAPORAN HARIAN</h3>
		<table class="table table-bordered mt-3" style="">
			<tr class="text-center">
				<td style="font-weight: bold;">No</td>
				<td style="font-weight: bold;">Nama Penyewa</td>
				<td style="font-weight: bold;">Tanggal</td>
				<td style="font-weight: bold;">Nomor Handphone</td>
				<td style="font-weight: bold;">Barang yang Disewa</td>
				<td style="font-weight: bold;">Keterangan</td>
				<td style="font-weight: bold;">Jumlah</td>
			</tr>
			<?php $no = 1; foreach($sql as $data): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= date("d F Y", strtotime($data['tanggal'])); ?></td>
				<td><?= $data['noHp']; ?></td>
				<td><?= $data['barang']; ?></td>
				<td><?= $data['keterangan']; ?></td>
				<td style="text-align: right!important;">Rp. <?= number_format($data['jumlah'],2,',','.'); ?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td class="text-center" colspan="6" style="font-weight: bold;">Total Kas Masuk</td>
				<td style="text-align: right!important;">
					<?php 
						$sql = mysqli_query($con, "SELECT sum(jumlah) as pemasukan FROM tb_pemasukan WHERE tanggal='$tgl'");
						$data = mysqli_fetch_array($sql);
						echo "<b>Rp. " . number_format($data['pemasukan'],2,',','.') . "</b>";
					 ?>	
				</td>
			</tr>
		</table>
	</div>

<script>
	window.print();
</script>
</body>
</html>