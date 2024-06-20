<?php 
	ob_start();
	session_start();

	include "../config/config.php";

	if(!$_SESSION['user']) {
		header("location: login.php");
	}

 ?>
 	<?php require_once "template/header.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          	<div class="breadcrumb">
          		Dashboard &nbsp;<b><?= $_GET['page']; ?></b>
          	</div>
          	<div class="row">
				<div class="col-md-12">
					<div class="x_panel">
						<div class="x_title"><h3><?= ucfirst($_GET['page']);?></h3></div>
						<div class="x_content">
          	<?php 

          		if(isset($_GET['page'])) {
          			$page = $_GET['page'];

          			switch($page) {
          				case 'home':
          				include "dashboard/index.php";
          				break;
          				// Menu Pemasukan
          				case 'pemasukan':
          				include "pemasukan/index.php";
          				break;
          				case 'hapus-pemasukan':
          				include "pemasukan/hapus.php";
          				break;
          				case 'edit-pemasukan':
          				include "pemasukan/proses-edit.php";
          				break;
          				// Menu Pengeluaran
          				case 'pengeluaran':
          				include "pengeluaran/index.php";
          				break;
          				case 'hapus-pengeluaran':
          				include "pengeluaran/hapus.php";
          				break;
          				case 'edit-pengeluaran':
          				include "pengeluaran/proses-edit.php";
          				break;
                  // Menu Produk
                  case 'produk':
                  include "produk/index.php";
                  break;  
                  case 'hapus-produk':
                  include "produk/hapus.php";
                  break;
                  case 'edit-produk':
                  include "produk/proses-edit.php";
                  break;
                  // Menu Galeri
                  case 'galeri':
                  include "galeri/index.php";
                  break;
                  case 'hapus-galeri':
                  include "galeri/hapus.php";
                  break;
                  case 'edit-galeri':
                  include "galeri/proses-edit.php";
                  break;
                  // Menu Rekaptulasi
                  // Menu Laporan Harian
                  case 'report-harian':
                  include "rekaptulasi/report-harian/index.php";
                  break;
                  // Menu Laporan Bulanan
                  case 'report-bulanan':
                  include "rekaptulasi/report-bulanan/index.php";
                  break;
                  // Menu Laporan Setahun
                  case 'report-tahunan':
                  include "rekaptulasi/report-tahunan/index.php";
                  break;
                  // Menu Laporan Tahunan
                  case 'report-akhir-tahun':
                  include "rekaptulasi/report-akhirtahun/index.php";
                  break;
                  // Menu User
                  case 'detail-user':
                  include "user/index.php";
                  break;
                  case 'dinamis-user':
                  include "user-dinamis/index.php";
                  break;
                  case 'update-header':
                  include "user-dinamis/proses-banner.php";
                  break;
                  case 'update-about':
                  include "user-dinamis/proses-about.php";
                  break;

          			} 
          		} else {
          				include "dashboard/index.php";
          			}

          	  ?>
          	</div>
					</div>
				</div>
			</div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php require_once "template/footer.php"; ?>