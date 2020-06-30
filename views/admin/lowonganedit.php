<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>
<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url. 'lowongan/update/'.$data->id; ?>" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		        <label>Posisi</label>
		        <input type="text" name="posisi" class="form-control" placeholder="input posisi pekerjaan" value="<?php echo $data->posisi; ?>" required>
		    </div>
		    <div class="form-group">
		        <label>Perusahaan</label>
		        <input type="text" name="perusahaan" class="form-control" placeholder="input nama perusahaan" value="<?php echo $data->perusahaan; ?>" required>
		    </div>
		    <div class="form-group">
		    	<label>Deskripsi Pekerjaan</label>
		    	<textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="input deskripsi pekerjaan" required><?php echo $data->deskripsi ?></textarea>
		    </div>
		    <div class="form-group">
		    	<label>Persyaratan</label>
		    	<textarea name="persyaratan" id="" cols="30" rows="10" class="form-control" placeholder="input persyaratan" required><?php echo $data->persyaratan ?></textarea>
		    </div>
		    <div class="form-group">
		    	<label>Lokasi Perusahaan</label>
		    	<textarea name="lokasi" id="" cols="30" rows="5" class="form-control" placeholder="input lokasi perusahaan" required><?php echo $data->lokasi ?></textarea>
		    </div>
		    <div class="form-group">
		    	<label>Cara Pendaftaran</label>
		    	<textarea name="carapendaftaran" id="" cols="30" rows="10" class="form-control" placeholder="input cara pendaftaran"><?php echo $data->carapendaftaran ?></textarea>
		    </div>
		    <div class="form-group">
		    	<input type="submit" value="SIMPAN" name="simpan" class="btn btn-simpan btn-block">
		    </div>
		</form>
	</div>
</div>

<?php
$this->view('templates/admin/footer');
?>