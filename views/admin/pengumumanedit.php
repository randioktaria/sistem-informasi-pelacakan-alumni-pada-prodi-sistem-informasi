<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url.'pengumuman/update/'.$data->id; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" placeholder="input judul Pengumuman" value="<?php echo $data->judul; ?>" required>
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" placeholder="input isi Pengumuman" class="form-control" rows="10" required><?php echo $data->isi; ?></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="simpan" value="SIMPAN" class="btn btn-simpan btn-block">
			</div>
		</form>
	</div>
</div>

<?php
$this->view('templates/admin/footer');
?>