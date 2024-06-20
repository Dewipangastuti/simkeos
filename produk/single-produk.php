<?php $id = $_GET['id']; ?>
<section id="banner">
	<div class="container" style="margin-top: 100px;">
		<div class="header-banner d-flex align-items-center">
			<h1 class="mx-auto">
				Detail <span>Produk</span>
			<div class="hr"></div>
			</h1>
		</div>
	</div>
</section>
<section id="singleProduk" class="my-3" >
	<div class="container" >
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item" ><a href="?page=home" style="text-decoration:none; font-weight:500; font-size:20px;">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page" style="text-decoration:none; font-weight:500; font-size:20px;">Detail Produk</li>
		  </ol>
		</nav>
	<!-- Akhir Breadcrumb -->
		<div class="row">
			<?php 
				$sql = mysqli_query($con, "SELECT * FROM tb_produk WHERE id_produk='$id'");
			 	foreach($sql as $data):
			 ?>
			<div class="col-md-3">
				<img src="assets/img/produk/<?= $data['image'] ?>" class="img-fluid"  style="height:400px ">
			</div>
			<div class="col-md-9">
				<h3 class="mt-3" style="font-weight: bold; font-size: 36px;"><?= $data['nama_produk'] ?></h3>
				<label class="mt-3"><h5 style="font-weight: bold;">Deskripsi produk :</h5></label>
				<p><?= $data['deskripsi_produk'] ?></p>
				<label class="mt-3"><h5 style="font-weight: bold;">Harga produk :</h5></label>
				<p>Rp. <?= number_format($data['harga_produk'],2,',','.') ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>
<!-- Akhir Banner -->
