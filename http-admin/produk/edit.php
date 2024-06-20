
	<!-- Modal Edit Data -->
	<div class="modal fade" id="updateProduk<?= $data['id_produk']; ?>" tabindex="-1" aria-labelledby="updateProdukLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				    <h5 class="modal-title" id="updateProdukLabel">Form Edit Data Produk</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>
				</div>
				<div class="modal-body">
					<?php 
				        $create = mysqli_query($con, "SELECT * FROM tb_produk WHERE id_produk='". $data['id_produk'] ."'");
				        $datas = mysqli_fetch_array($create);
				    ?>
				    <form method="POST" enctype="multipart/form-data" action="index.php?page=edit-produk&id=<?= $datas['id_produk']; ?>">
				        <div class="form-group">
				        	<label for="tanggal">Nama Produk</label>
				        	<input type="varchar" name="nama_produk" class="form-control" value="<?= $datas['nama_produk']; ?>" required />
				        </div>
				        <div class="form-group">
				        	<label for="deskripsi">Deskripsi Produk</label>
				        	<textarea name="deskripsi_produk" class="form-control" required /><?= $datas['deskripsi_produk'] ?></textarea>
				        </div>
				        <div class="form-group">
				        	<label for="harga">Harga Produk</label>
				        	<input type="number" name="harga_produk" min="0" class="form-control" value="<?= $datas['harga_produk'] ?>" required />
				        </div>
				        <div class="form-group">
				        	<label for="image">file</label>
				        	<input type="file" name="image" class="form-control" value="<?= $datas['image'] ?>" />
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