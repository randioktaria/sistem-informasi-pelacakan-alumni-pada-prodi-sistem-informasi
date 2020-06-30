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
    <i class="fa fa-fw fa-file-text"></i> Data Kuisioner
  </div>
  <div class="card-body">
    <div class="container-fluid" style="margin-bottom: 10px;">
      <a href="<?php echo url. 'kuisioner/add'; ?>" class="btn btn-sm btn-simpan"><i class="fa fa-fw fa-plus"></i> Tambah data</a>
    </div>
    <div class="table table-responsive">
      <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th width="80%">Kuisioner</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $key => $data): ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->_kuisioner; ?></td>
            <td>
              <a href="<?php echo url .'kuisioner/edit/'. $data->id; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-edit"></i></a>
              <a onclick="return confirm('apakah ingin menghapus data kuisioner ?')" href="<?php echo url .'kuisioner/destroy/'. $data->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i></a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
     </table>
   </div>
  </div>
  <div class="card-footer text-muted">
    &nbsp;
  </div>
</div>
<div class="my-3"></div>

<?php
$this->view('templates/admin/footer');
?>