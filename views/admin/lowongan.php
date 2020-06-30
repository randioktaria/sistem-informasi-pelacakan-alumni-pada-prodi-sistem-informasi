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
    <i class="fa fa-fw fa-briefcase"></i> Data lowongan kerja
  </div>

  <div class="card-body">
    <div style="margin-bottom: 10px;">
      <a href="<?php echo url. 'lowongan/add'; ?>" class="btn btn-sm btn-simpan"><i class="fa fa-fw fa-plus"></i> Tambah data</a>
    </div>

      <?php foreach($data['lowongan'] as $data) :?>
      <div class="card box">
        <div class="card-body shadow">
          <div class="row">
            <div class="col-sm-10">
              <a href="<?php echo url .'lowongan/edit/'.$data->id; ?>" style="text-decoration: none;"><h5><?php echo $data->posisi; ?></h5></a>
              <?php echo $data->perusahaan; ?> <br>
              <i class="fa fa-map-marker"></i> <small><?php echo $data->lokasi; ?></small>
            </div>
            <div class="col-2">
              <a href="<?php echo url.'lowongan/edit/'.$data->id; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-edit"></i></a>
              <a onclick="return confirm('apakah ingin menghapus data lowongan ?')" href="<?php echo url.'lowongan/destroy/'.$data->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i></a>
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