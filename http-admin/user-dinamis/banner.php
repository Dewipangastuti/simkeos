	<div class="col-md-6">
		<div class="card" style="border-top: 4px solid #f70ffc;">
			<div class="card-header">
				<h3 class="text-center">Tampilan Header Banner</h3>
			</div>
			<div class="card-body">
				<form action="?page=update-header" method="POST">
					<div class="row">
						<?php 
							$sql = mysqli_query($con, "SELECT * FROM tb_dinamis_user");
							$data = mysqli_fetch_array($sql);
						 ?>
						<div class="col-md-12">
							<div class="form-group">
								<label for="hero-header">Header Banner</label>
								<input type="text" name="header_banner" class="form-control" placeholder="Mengubah Header Banner" value="<?= $data['header_banner'] ?>" required />
							</div>
							<div class="form-group">
								<label for="text-header">Text Banner</label>
								<textarea name="text_banner" class="form-control" id="text-banner" cols="10" rows="5"><?= $data['text_banner'] ?></textarea>
							</div>
						</div>					
						<div class="col-md-6">
							<div class="form-group">
								<label for="button1-header">Button 1</label>
								<input type="text" name="button1" class="form-control" placeholder="Mengubah Nama Button 1" value="<?= $data['button1'] ?>" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="button2-header">Button 2</label>
								<input type="text" name="button2" class="form-control" placeholder="Mengubah Nama Button 2" value="<?= $data['button2'] ?>" required />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-success">Ubah Data</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>