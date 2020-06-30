<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url.'pertanyaan/update/'.$data->id; ?>" method="POST">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" placeholder="input id pertanyaan" value="<?php echo $data->id ?>">
            </div>
			<div class="form-group">
                <label for="_pertanyaan">Pertanyaan</label>
                <input type="text" name="_pertanyaan" id="_pertanyaan"class="form-control" placeholder="input pertanyaan" value="<?php echo $data->_pertanyaan ?>" required>
            </div>

            <?php if (empty($data->pilihan)): ?>
            <div class="form-group">
               <a onclick="myFunction()" href="#"><small><i>klik jika pertanyaan memiliki options</i></small></a>
            </div>
            <?php else : {  } endif ?>
            <div class="form-group">
                <label for="pilihan" hidden>Pilihan</label>
                <textarea name="pilihan" id="pilihan" cols="30" rows="10" class="form-control" <?php echo empty($data->pilihan) ? 'hidden' :''; ?>><?php echo $data->pilihan ?></textarea>
            </div>

            <button type="submit" class="btn btn-simpan btn-block">SIMPAN</button>
		</form>
	</div>
</div>

<script>
    function myFunction() {
        const pilihan = document.getElementById('pilihan');
        
        if ( pilihan.getAttribute('hidden') === null ) {
            pilihan.setAttribute('hidden', '');
        } else {
            pilihan.removeAttribute('hidden');
        }
    }
</script>

<?php
$this->view('templates/admin/footer');
?>