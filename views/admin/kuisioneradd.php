<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo isset($data->id) ? url.'kuisioner/update/'.$data->id : url.'kuisioner/create' ?>" method="POST">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" maxlength="1" id="id" class="form-control" value="<?php echo isset($data->id) ? $data->id : ''; ?>" placeholder="input id kuisioner" required>
            </div>
            <div class="form-group">
                <label for="kuisioner">Kuisioner</label>
                <input type="text" name="kuisioner" id="kuisioner" class="form-control" value="<?php echo isset($data->_kuisioner) ? $data->_kuisioner: ''; ?>" placeholder="input kuisioner" required>
            </div>
            <button type="submit" class="btn btn-simpan btn-block">SIMPAN</button>
		</form>
	</div>
</div>

<?php
$this->view('templates/admin/footer');
?>