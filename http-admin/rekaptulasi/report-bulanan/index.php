	<!-- Button Modal -->
	<a href="#cetakReport" type="button" class="btn btn-primary" data-toggle="modal" >
		<i class="glyphicon glyphicon-print"></i>&nbsp;Cetak Data
	</a>

	<!-- Modal Tambah Data -->
	<div class="modal fade" id="cetakReport" tabindex="-1" aria-labelledby="cetakReport" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="cetakReport">Form Cetak Data</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-6">
				        <form method="POST" target="_blank" action="rekaptulasi/report-bulanan/report-bulanan-pemasukan.php" enctype="multipart/form-data">
		        			<div class="form-group mb-3">
				        		<label for="bulan">Tentukan Bulan</label>
				        		<select required name="bulan" class="form-control" id="bulan">
				        			<option value="">- Pilih Bulan -</option>
				        			<option value="1">Januari</option>
				        			<option value="2">Februari</option>
				        			<option value="3">Maret</option>
				        			<option value="4">April</option>
				        			<option value="5">Mei</option>
				        			<option value="6">Juni</option>
				        			<option value="7">Juli</option>
				        			<option value="8">Agustus</option>
				        			<option value="9">September</option>
				        			<option value="10">Oktober</option>
				        			<option value="11">November</option>
				        			<option value="12">Desember</option>
				        		</select>
				        	</div>
				        	<div class="form-group mb-3">
				        		<label for="tahun">Tentukan tahun</label>
				        		<select required name="tahun" class="form-control" id="bulan">
				        			<option value="">- Pilih Tahun -</option>
				        			<option value="2022">2022</option>
				        			<option value="2023">2023</option>
				        			<option value="2024">2024</option>
				        			<option value="2025">2025</option>
				        			<option value="2026">2026</option>
				        			<option value="2027">2027</option>
				        			<option value="2028">2028</option>
				        			<option value="2029">2029</option>
				        			<option value="2030">2030</option>
				        		</select>
				        	</div>
				        	<div class="form-group">
		        				<button class="btn btn-primary form-control">
		        					<i class="glyphicon glyphicon-print"></i>&nbsp;Cetak Pemasukan
		        				</button>
		        			</div>
				        </form>
	        		</div>
	        		<div class="col-md-6">
	        			<form method="POST" action="rekaptulasi/report-bulanan/report-bulanan-pengeluaran.php" enctype="multipart/form-data">
		        			<div class="form-group mb-3">
				        		<label for="bulan">Tentukan Bulan</label>
				        		<select required name="bulan" class="form-control" id="bulan">
				        			<option value="">- Pilih Bulan -</option>
				        			<option value="1">Januari</option>
				        			<option value="2">Februari</option>
				        			<option value="3">Maret</option>
				        			<option value="4">April</option>
				        			<option value="5">Mei</option>
				        			<option value="6">Juni</option>
				        			<option value="7">Juli</option>
				        			<option value="8">Agustus</option>
				        			<option value="9">September</option>
				        			<option value="10">Oktober</option>
				        			<option value="11">November</option>
				        			<option value="12">Desember</option>
				        		</select>
				        	</div>
				        	<div class="form-group mb-3">
				        		<label for="tahun">Tentukan tahun</label>
				        		<select required name="tahun" class="form-control" id="bulan">
				        			<option value="">- Pilih Tahun -</option>
				        			<option value="2022">2022</option>
				        			<option value="2023">2023</option>
				        			<option value="2024">2024</option>
				        			<option value="2025">2025</option>
				        			<option value="2026">2026</option>
				        			<option value="2027">2027</option>
				        			<option value="2028">2028</option>
				        			<option value="2029">2029</option>
				        			<option value="2030">2030</option>
				        		</select>
				        	</div>
		        			<div class="form-group">
		        				<button class="btn btn-danger form-control">
		        					<i class="glyphicon glyphicon-print"></i>&nbsp;Cetak Pengeluaran
		        				</button>
		        			</div>
		        		</form>
	        		</div>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>