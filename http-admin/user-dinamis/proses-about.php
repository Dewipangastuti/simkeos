<?php 
	$id = 1;

	$header_about = $_POST['header_about'];
	$text_about = $_POST['text_about'];

	$sql = mysqli_query($con, "UPDATE tb_dinamis_user SET header_about='$header_about', text_about='$text_about' WHERE id='$id'");
	if($sql) {
		echo "<script>alert('berhasil')</script>";
		echo "<script>window.location.href='index.php?page=dinamis-user'</script>";
	}
 ?>