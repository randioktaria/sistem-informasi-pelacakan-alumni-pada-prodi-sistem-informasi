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

<div class="card shadow">
  <div class="card-header">
    <i class="fa fa-fw fa-send"></i> Data pengumuman
  </div>

  <div class="card-body">
    <div style="margin-bottom: 10px;">
      <a href="<?php echo url. 'pengumuman/add'; ?>" class="btn btn-sm btn-simpan"><i class="fa fa-fw fa-plus"></i> Tambah data</a>
    </div>

    <?php foreach($data as $data): ?>
      <div class="card box">
        <div class="card-body shadow">
          <div class="row">
            <div class="col-sm-10">
              <h5><a href="" style="text-decoration: none;"><?php echo $data->judul; ?></a></h5>
              <small><b><?php echo $data->tgl_post; ?></b></small> <br>
              <div style="text-align: justify;"><?php echo substr($data->isi, 0, 150); ?> . . .</div>
            </div>
            <div class="col-sm-2">
              <a href="<?php echo url.'pengumuman/edit/'.$data->id; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-edit"></i></a>
              <a onclick="return confirm('apakah ingin menghapus data pengumuman ?')" href="<?php echo url.'pengumuman/destroy/'.$data->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i></a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="card-footer text-muted">
    &nbsp;
  </div>
</div>

<?php
$this->view('templates/admin/footer');
?>
