
	<!-- Modal Edit Data -->
				<div class="modal fade" id="updateGaleri<?= $data['id_galeri']; ?>" tabindex="-1" aria-labelledby="updateGaleriLabel" aria-hidden="true">
					<div class="modal-dialog">
					    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="updateGaleriLabel">Form Edit Data Galeri</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <?php 
				        	$sql = mysqli_query($con, "SELECT * FROM tb_galeri WHERE id_galeri='". $data['id_galeri'] ."'");
				        	$datas = mysqli_fetch_array($sql);
				         ?>
				        <form method="POST" enctype="multipart/form-data" action="index.php?page=edit-galeri&id=<?= $datas['id_galeri']; ?>">
				        	<div class="form-group">
				        		<label for="file">Upload Gambar</label>
				        		<input type="file" name="file" class="form-control" value="<?= $datas['image'] ?>" required />
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