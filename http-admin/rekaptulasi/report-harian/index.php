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
				        <form method="POST" target="_blank" action="rekaptulasi/report-harian/report-harian-pemasukan.php" enctype="multipart/form-data">
		        			<div class="form-group mb-3">
				        		<label for="tanggal">Tentukan Tanggal</label>
				        		<input type="date" name="choice" class="form-control" required />
				        	</div>
		        			<div class="form-group">
		        				<button class="btn btn-primary form-control">
		        					<i class="glyphicon glyphicon-print"></i>&nbsp;Cetak Pemasukan
		        				</button>
		        			</div>
				        </form>
	        		</div>
	        		<div class="col-md-6">
	        			<form method="POST" action="rekaptulasi/report-harian/report-harian-pengeluaran.php" enctype="multipart/form-data">
		        			<div class="form-group">
		        				<div class="form-group mb-3">
					        		<label for="tanggal">Tentukan Tanggal</label>
					        		<input type="date" name="choice" class="form-control" required />
					        	</div>
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