<?php
$this->view('templates/admin/header');
$this->view('templates/admin/navbar');
?>

<div class="card shadow">
  <div class="card-header">
    <i class="fa fa-fw fa-newspaper-o"></i> Berita detail
  </div>

  <div class="card-body">
      <h5><?php echo $data->judul; ?></h5>
      <small><?php echo $data->tgl_post; ?></small>
      <img src="<?php echo url.'image/berita/'.$data->foto;?>" class="img-thumbnail" width="100%">
      <div style="text-align: justify; padding-top: 10px"><?php echo $data->isi; ?></div>
  </div>

  <div class="card-footer text-muted">
    &nbsp;
  </div>
</div>

<div class="my-3"></div>

<?php
$this->view('templates/admin/footer');
?>