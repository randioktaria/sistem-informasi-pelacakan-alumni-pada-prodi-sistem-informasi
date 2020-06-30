<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url.'alumni/create'; ?>" method="POST">
			<div class="form-group">
				<label>Nobp</label>
				<input type="text" name="nobp" class="form-control" placeholder="input nobp alumni" required>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="input nama alumni" required>
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="email" class="form-control" placeholder="input e-mail alumni" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="input username alumni" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" placeholder="input password alumni" required>
			</div>
			<div class="form-group">
				<input type="submit" name="simpan" value="SIMPAN" class="btn btn-simpan btn-block">
			</div>
		</form>
	</div>
</div>