
	<!-- Modal Edit Data -->
				<div class="modal fade" id="updatePemasukan<?= $data['id']; ?>" tabindex="-1" aria-labelledby="updatePemasukanLabel" aria-hidden="true">
					<div class="modal-dialog">
					    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="updatePemasukanLabel">Form Edit Data Pemasukan</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <?php 
				        	$sql = mysqli_query($con, "SELECT * FROM tb_pemasukan WHERE id='". $data['id'] ."'");
				        	$datas = mysqli_fetch_array($sql);
				         ?>
				        <form method="POST" action="index.php?page=edit-pemasukan&id=<?= $datas['id']; ?>">
				        	<div class="form-group">
							<label for="namaPenyewa">Nama Penyewa</label>
	        					<input type="varchar" name="nama" class="form-control" value="<?= $datas['nama']; ?>"  />
				        	</div>
				        	<div class="form-group">
				        		<label for="tanggal">Tanggal</label>
				        		<input type="date" name="tgl" class="form-control" value="<?= $datas['tanggal']; ?>"  />
				        	</div>
							<div class="form-group">
							<label for="nomorHp">Nomor HP</label>
	        					<input type="text" name="noHp" class="form-control" value="<?= $datas['noHp']; ?>"  />
				        	</div>
							<div class="form-group">
							<label for="barang">Barang yang disewa</label>
	        					<input type="text" name="brg" class="form-control" value="<?= $datas['barang']; ?>"  />
				        	</div>
				        	<div class="form-group">
				        		<label for="tanggal">Keterangan</label>
				        		<input type="text" name="ket" class="form-control" value="<?= $datas['keterangan']; ?>" />
				        	</div>
				        	<div class="form-group">
				        		<label for="tanggal">Jumlah</label>
				        		<input type="number" name="jml" min="0" class="form-control" value="<?= $datas['jumlah']; ?>" />
				        	</div>
				        <?php //endforeach; ?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>