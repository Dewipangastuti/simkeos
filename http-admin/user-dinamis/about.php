	<div class="col-md-6">
		<div class="card" style="border-top: 4px solid #eef709;">
			<div class="card-header">
				<h3 class="text-center">Tampilan About Us</h3>
			</div>
			<div class="card-body">
				<form action="?page=update-about" method="POST">
					<div class="form-group">
						<label for="header_about">Header About</label>
						<input type="text" name="header_about" class="form-control" placeholder="Mengubah Header Banner" value="<?= $data['header_about'] ?>" required />
					</div>
					<div class="form-group">
						<label for="text_about">Text About</label>
						<input type="text" name="text_about" class="form-control" placeholder="Mengubah Text Banner" value="<?= $data['text_about'] ?>" required />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>