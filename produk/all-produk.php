<section id="banner">
	<div class="container">
		<div class="header-banner d-flex align-items-center">
			<h1 class="mx-auto">
				Daftar <span>Produk</span>
			<div class="hr"></div>
			</h1>
		</div>
	</div>
</section>
<section id="allProduk" class="my-3">
	<div class="container"style="margin-top: 50px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" >
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="?page=home" style="text-decoration:none; font-weight:500; font-size:20px;">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page" style="text-decoration:none; font-weight:500; font-size:20px;">Semua Produk</li>
		  </ol>
		</nav>
	<!-- Akhir Breadcrumb -->
		<div class="row">
			<?php 
				$sql = mysqli_query($con, "SELECT * FROM tb_produk");
			 	foreach($sql as $data):
			 ?>
			<div class="col-md-4 my-2">
				<div class="card" style="padding: 10px;	box-shadow: 0px 5px 15px 2px #00a9c7; margin:10px; height:360px ">
					<img src="assets/img/produk/<?= $data['image'] ?>" class="card-img-top" style="height:200px"/>
					<div class="card-body" >
						<div class="card-title">
							<h3><?= $data['nama_produk'] ?></h3>
						</div>
						<div class="card-text">
							<p>Rp. <?= number_format($data['harga_produk'],2,',','.'); ?></p>
							<a href="?page=detail-produk&id=<?= $data['id_produk'] ?>" class="btn btn-primary">Lihat Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>
<!-- Akhir Banner -->
