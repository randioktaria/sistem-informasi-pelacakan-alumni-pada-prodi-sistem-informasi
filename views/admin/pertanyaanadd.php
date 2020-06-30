<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<div class="card shadow">
	<div class="card-body">
		<form action="<?php echo url.'pertanyaan/create'; ?>" method="POST">
            <div class="form-group">
                <label for="id_kuisioner">Kuisioner</label>
                <select name="id_kuisioner" id="id_kuisioner" class="form-control">
                   <?php foreach ($data as $data): ?>
                        <option value="<?php echo $data->id ?>"><?php echo $data->id.' - ' .$data->_kuisioner?></option>
                    <?php endforeach ?>    
                </select>
            </div>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" placeholder="input id pertanyaan" required>
            </div>
			<div class="form-group">
                <label for="_pertanyaan">Pertanyaan</label>
                <input type="text" name="_pertanyaan" id="_pertanyaan"class="form-control" placeholder="input pertanyaan" required>
            </div>
            <div class="form-group">
               <a onclick="myFunction()" href="#"><small><i>klik jika pertanyaan memiliki options</i></small></a>
            </div>
            <div class="form-group">
                <textarea name="pilihan" id="pilihan" cols="30" rows="10" class="form-control" hidden></textarea>
            </div>

            <button type="submit" class="btn btn-simpan btn-block">SIMPAN</button>
		</form>
	</div>
</div>

<script>
    function myFunction() {
        const pilihan = document.getElementById('pilihan');
        
        if ( pilihan.getAttribute('hidden') === null ) {
            pilihan.setAttribute('hidden','');
        } else {
            pilihan.removeAttribute('hidden');
        }
    }
</script>

<?php
$this->view('templates/admin/footer');
?>