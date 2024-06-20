<?php include "template/header.php"; ?>
	<?php 

	if(isset($_GET['page'])) {
		$page = $_GET['page'];

		switch($page) {
			case 'home':
			include "home/index.php";
			break;
			case 'detail-produk':
			include "produk/single-produk.php";
			break;
			case 'semua-produk':
			include "produk/all-produk.php";
			break;
			
			case 'semua-galeri':
			include "galeri/all-galeri.php";
			break;
		} 
	} else {
			include "home/index.php";
		}
  	 ?>
<?php include "template/footer.php"; ?>