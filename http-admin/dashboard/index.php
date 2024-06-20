<?php   
    function total_harga($table) {
      include "../config/config.php";
      $sql = mysqli_query($con, "SELECT sum(jumlah) AS harga FROM $table");
      $data = mysqli_fetch_array($sql);
      return $data['harga'];
    }
?>
    <div class="row" >
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <h3>Selamat Datang <?= ucfirst($_SESSION['user']); ?></h3>
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam minus, iure? Mollitia provident eveniet soluta totam placeat quibusdam ipsum? Consectetur voluptatibus rerum nobis animi accusantium eligendi nam quis vero sit.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 col-sm-4">
        <a href="index.php?page=pemasukan">
          <div class="card p-2" style="border-radius:15px;box-shadow: 1px 1px 15px #7F8487;border:none;">
          	<div class="card-header text-center">
          		<h5 class="text-success font-weight-bold">
            		<i class="glyphicon glyphicon-floppy-save" style="font-size:24px;color: #2ecc71"></i>
&nbsp;Pemasukan
          		</h5>
          	</div>
          	<div class="card-body">
          		<div class="row">
                <div class="col-md-12">
                  <h3 class="text-center font-weight-bold">Rp. <?= number_format(total_harga('tb_pemasukan'),2,',','.'); ?></h3>
                </div>
              </div>
          	</div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
      	<a href="index.php?page=pengeluaran">
          <div class="card p-2" style="border-radius:15px;box-shadow: 1px 1px 15px #7F8487;border:none;">
            	<div class="card-header text-center">
            		<h5 class="text-danger font-weight-bold">
              		<i class="glyphicon glyphicon-floppy-open" style="font-size: 24px;color: #e74c3c"></i>&nbsp;Pengeluaran
            		</h5>
            	</div>
            	<div class="card-body">
            		<div class="row">
                  <div class="col-md-12">
                    <h3 class="text-center font-weight-bold">Rp. <?= number_format(total_harga('tb_pengeluaran'),2,',','.'); ?></h3>
                  </div>
                </div>
            	</div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <a href="#">
          <div class="card p-2" style="border-radius:15px;box-shadow: 1px 1px 15px #7F8487;border:none;">
            	<div class="card-header text-center">
            		<h5 class="text-info font-weight-bold">
              		<i class="glyphicon glyphicon-floppy-disk" style="font-size: 24px; color: #8e44ad"></i>&nbsp;Saldo
            		</h5>
            	</div>
            	<div class="card-body">
                <div class="row">
                  <div class="col-md-12">  
                    <h3 class="text-center font-weight-bold">Rp. <?= number_format(total_harga('tb_pemasukan') - total_harga('tb_pengeluaran'),2,',','.') ?></h3>
                  </div>
                </div>
            	</div>
          </div>
        </a>
      </div>
  </div>
    <!-- /top tiles -->