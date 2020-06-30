<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<!-- menampilkan Pesan -->
<?php if ($message = Engine\Flasher::get_message('berhasil')) :?>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <?php echo $message ?> <!-- method untuk menampilkan pesan -->
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
<?php endif; ?>

<div class="card shadow" style="margin-bottom: 10px">
  <div class="card-header">
    <i class="fa fa-fw fa-newspaper-o"></i> Data berita
  </div>

  <div class="card-body">
    <div style="margin-bottom: 10px;">
      <a href="<?php echo url. 'berita/add'; ?>" class="btn btn-sm btn-simpan"><i class="fa fa-fw fa-plus"></i> Tambah data</a>
    </div>

      <?php foreach($data as $data) :?>
      <div class="card box">
        <div class="card-body shadow">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo url.'image/berita/'. $data->foto; ?>" alt="" class="img-thumbnail" width="100%">
            </div>
            <div class="col-md-7">
              <a href="<?php echo url .'berita/detail/'.$data->id; ?>" style="text-decoration: none;"><h5><?php echo $data->judul; ?></h5></a>
              <small><b><?php echo $data->tgl_post; ?></b></small> <br>
              <div style="text-align: justify;"><?php echo substr($data->isi, 0, 200); ?></div>
              <a href="<?php echo url .'berita/detail/'.$data->id; ?>"><small>baca selangkapnya &raquo;</small></a>
            </div>
            <div class="col-md-2">
              <a href="<?php echo url.'berita/edit/'.$data->id; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-edit"></i></a>
              <a onclick="return confirm('apakah ingin menghapus data berita ?')" href="<?php echo url.'berita/destroy/'.$data->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
	</div>
	
	 <div class="card-footer text-muted">
		&nbsp;
	  </div>
</div

<?php
$this->view('templates/admin/footer');
?>