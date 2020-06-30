<div class="card shadow">
  <div class="card-body">
		<form action="<?php echo url.'posting/create/berita'; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" placeholder="input judul berita" required>
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" placeholder="input isi berita" class="form-control" rows="10" required></textarea>
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="simpan" value="SIMPAN" class="btn btn-simpan btn-block">
			</div>
		</form>
	</div>
</div>