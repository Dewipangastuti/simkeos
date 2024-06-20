<?php 
	$id = 1;

	$header_banner = $_POST['header_banner'];
	$text_banner = $_POST['text_banner'];
	$btn1 = $_POST['button1'];
	$btn2 = $_POST['button2'];

	$sql = mysqli_query($con, "UPDATE tb_dinamis_user SET header_banner='$header_banner', text_banner='$text_banner', button1='$btn1', button2='$btn2' WHERE id='$id'");
	if($sql) {
		echo "<script>alert('berhasil')</script>";
		echo "<script>window.location.href='index.php?page=dinamis-user'</script>";
	}
 ?>