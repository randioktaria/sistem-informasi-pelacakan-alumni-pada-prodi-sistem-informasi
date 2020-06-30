<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url.'alumni/update/'.$data->id; ?>" method="POST">
			<div class="form-group">
				<label>Nobp</label>
				<input type="text" name="nobp" class="form-control" placeholder="input nobp" value="<?php echo $data->nobp; ?>" required>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="input nama" value="<?php echo $data->nama; ?>" required>
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" class="form-control" placeholder="input e-mail" value="<?php echo $data->email; ?>" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="input username" value="<?php echo $data->username; ?>" required>
			</div>
			<div class="form-group">
				<input type="submit" name="simpan" value="SIMPAN" class="btn btn-simpan btn-block">
			</div>
		</form>
	</div>
</div>
