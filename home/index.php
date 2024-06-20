<?php 
	include_once "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tb_dinamis_user");
	$data = mysqli_fetch_array($sql);
 ?>
<section id="hero-banner">
		<div class="container">
			<div class="row d-flex align-items-center hero-content-text">
				<div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 200px;">
					<h3 style="color: white;">Edelweiss Outdoor Salatiga</h3>
					<h4 style="font-size: 40px; font-weight: 600; color:white;">Rental Outdoor Equipment</h4>
					<p class="mt-3" style="color: white;">Menyediakan berbagai peralatan outdoor di salatiga,
					harga terjangkau, barang berkualitas, syarat mudah, dan proses cepat
					</p>
					<div class="hero-button">
						<a href="" class="btn-about">Sewa Sekarang  <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Akhir Hero Banner -->

	<!-- About Us -->
	<section id="aboutUs">
		<div class="container">
			<div class="aboutUs-header">
				<h3 class="text-center text-uppercase">About <span>US</span></h3>
				<div class="hr-head"></div>
			</div>
			<div class="aboutUs-content mt-3">
				<div class="row d-flex align-items-center">
					<div class="col-md-6 d-flex justify-content-center" style="margin-bottom: 20px;">
						<img src="assets/img/background/logo.png" class="img-fluid img-thumbnail img-aboutUs">
					</div>
					<div class="col-md-6">
						<h4 style="font-weight: 600; font-size:30px;">Edelweiss Outdoor Salatiga</h4>
						<h4>Rental Outdoor Equipment</h4>
						<p></p>
						<div class="row aboutUs-content-check">
							<div class="col-md-6">
								<p><i class="fa-solid fa-check"></i> <span>Jual beli Alat Outdoor</span></p>
							</div>
							<div class="col-md-6">
								<p><i class="fa-solid fa-check"></i> <span>Jasa Rental Alat Outdoor</span></p>
							</div>
							<div class="col-md-6">
								<p><i class="fa-solid fa-check"></i> <span>Porter and Guide</span></p>
							</div>
							<div class="col-md-6">
								<p><i class="fa-solid fa-check"></i> <span>Lokasi Strategis</span></p>
							</div>
							<div class="col-md-12 mt-4">
								<a href="?page=semua-galeri" class="btn-galeri"> Sewa Sekarang  <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir About Us -->

	<!-- Produk -->
	<section id="produk">
		<div class="container">
			<div class="produk-header">
				<h3 class="text-center"><span>Produk</span> Kami</h3>
				<div class="hr-head"></div>
			</div>
			<div class="produk-content">
				<div class="container">
					<div class="row mt-5">
						<?php 
							$sql = mysqli_query($con, "SELECT * FROM tb_produk");
							foreach($sql as $data):
						?>
						<div class="col-md-3">
							<div class="card" style="padding: 10px;	box-shadow: 0px 5px 15px 2px #00a9c7; margin:10px; height:360px ">
								<img src="assets/img/produk/<?= $data['image'] ?>" class="card-img-top"  style="height:200px " />
								<div class="card-body" style="height:200px">
									<div class="card-title">
										<h4><?= $data['nama_produk'] ?></h4>
									</div>
									<div class="card-text">
										<p>Rp. <?= number_format($data['harga_produk'],2,',','.'); ?></p>
										<a href="?page=detail-produk&id=<?= $data['id_produk'] ?>" class="btn-produk">Lihat Detail</a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<div class="all-produk mt-5 text-center">
							<a href="?page=semua-produk" class="btn-all-produk">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Produk -->

	<!-- Porter -->
	<section id="porter">
		<div class="container">
			<div class="porter-header">
				<h3 class="text-center text-uppercase">Porter And <span>Guide</span></h3>
				<div class="hr-head"></div>
			</div>
			<div class="porter-content mt-5">
				<div class="row d-flex align-items-center">
					<div class="col-md-6 d-flex justify-content-center">
							<div class="row porter-content-check">
								<h4>Melayani jasa porter dan guide untuk kalian yang ingin naik gunung di wilayah jateng, seperti
									Merbabu, Andong, Prahu, dan sekitarnya.
								</h4>
								<div class="col-md-12 mt-5" style="margin-bottom: 40px;">
								<a href="https://api.whatsapp.com/send/?phone=%2B6282323291674&text=Hallo+Edelweiss+Outdoor" class="btn-galeri"> Jasa Porter<i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							
					</div>
					<div class="col-md-6">
						<img src="assets/img/background/porter.jpg" class="img-fluid img-thumbnail img-porter">
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Porter -->


	<section id="galeri">
		<div class="container">
			<div class="galeri-header">
				<h4 class="text-center text-uppercase"><span>Galeri</span></h4>
				<div class="hr-head"></div>
			</div>
			<div class="galeri-content mt-3">
				<div class="row">
				<div class="row galeri">
							<?php
								$sql = mysqli_query($con, "SELECT * FROM tb_galeri");
								foreach ($sql as $data) :
							?>
							<div class="col-md-2"><img src="assets/frontend/galeri/<?= $data['image'] ?>" class="img-fluid img-thumbnail img-galeri"></div>
							<?php endforeach; ?> 
							
						</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="contact-header">
				<h3 class="text-center text-uppercase">Contact <span>US</span></h3>
				<div class="hr-head"></div>
			</div>
			<div class="contact-content mt-3">
				<div class="row d-flex align-items-center">
					<div class="col-md-6 d-flex justify-content-center" style="margin-bottom: 20px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4124257668195!2d110.47319551617638!3d-7.307477159451147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a791494358265%3A0x82572ea57b630003!2sEdelweiss%20Outdoor!5e0!3m2!1sen!2sid!4v1675082605349!5m2!1sen!2sid" width="350" height="350" style="border:0; border-radius:15px; box-shadow: 5px 5px 15px #046677;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid img-thumbnail img-contact"></iframe>
						<!-- <img src="assets/frontend/about-us.jpg" class="img-fluid img-thumbnail img-feature"> -->
					</div>
					<div class="col-md-6">
						
						<div class="row contact-content-icon">
							<div class="col-md-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
							<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
							</svg> <a href="https://www.instagram.com/edelweissoutdoor2020/" class="link"> @edelweissoutdoor2020</a>
							</div>
							<div class="col-md-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
							<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
							</svg> <a href="https://api.whatsapp.com/send/?phone=%2B6282323291674&text=Hallo+Edelweiss+Outdoor" class="link">Oman</a>
							</div>
							<div class="col-md-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
							<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
							<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg> <a href="https://goo.gl/maps/PMfb5wwMEmQFSMVR7" class="link"> Edelweiss Outdoor Salatiga </a>
							</div>
							<div class="col-md-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
							<path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
							</svg>
							<a href="https://www.tiktok.com/@outdoorrent_salatiga20?_t=8ZYoiULBcby&_r=1" class="link"> @outdoorrent_salatiga20</a>
							</div>
							<div class="col-md-12 mt-5" style="margin-bottom: 10px;">
								<a href="https://goo.gl/maps/PMfb5wwMEmQFSMVR7" class="btn-galeri">Buka Maps <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Feature -->

	