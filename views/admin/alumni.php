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
    <i class="fa fa-fw fa-graduation-cap"></i> Data alumni
  </div>
  <div class="card-body">
    <div class="container-fluid" style="margin-bottom: 10px;">
      <a href="<?php echo url. 'alumni/add'; ?>" class="btn btn-sm btn-simpan"><i class="fa fa-fw fa-plus"></i> Tambah data</a>
    </div>
    <div class="table table-responsive">
      <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>Nobp</th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['alumni'] as $key => $data): ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $data->nobp; ?></td>
            <td><?php echo $data->nama; ?></td>
            <td><?php echo $data->email; ?></td>
            <td>
              <a href="<?php echo url .'alumni/edit/'. $data->id; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-edit"></i></a>
              <a onclick="return confirm('apakah ingin menghapus data alumni ?')" href="<?php echo url .'alumni/destroy/'. $data->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-o"></i></a>
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