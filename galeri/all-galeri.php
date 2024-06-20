<section id="banner">
	<div class="container">
		<div class="header-banner d-flex align-items-center">
			<h1 class="mx-auto">
				Daftar <span>Galeri</span>
			<div class="hr"></div>
			</h1>
		</div>
	</div>
</section>
<section id="allProduk" class="my-3">
	<div class="container">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Semua Galeri</li>
		  </ol>
		</nav>
	<!-- Akhir Breadcrumb -->
		<div class="row">
			<?php 
				$sql = mysqli_query($con, "SELECT * FROM tb_galeri");
			 	foreach($sql as $data):
			 ?>
			<div class="col-md-4 my-2">
				<img src="assets/frontend/galeri/<?= $data['image'] ?>" class="img-fluid img-thumbnail img-galeri" style="height: 350px" />
			</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>
<!-- Akhir Banner -->
