<?php 
	$id = $_GET['id'];

	$tgl = $_POST['tgl'];
	$kep = $_POST['kep'];
	$ket = $_POST['ket'];
	$jml = $_POST['jml'];

	$sql = mysqli_query($con, "UPDATE tb_pengeluaran SET tanggal='$tgl',  keperluan='$kep', keterangan='$ket', jumlah='$jml' WHERE id='$id'");
	if($sql) {
		echo "<script>alert('berhasil')</script>";
		echo "<script>window.location.href='index.php?page=pengeluaran'</script>";
	}
 ?>