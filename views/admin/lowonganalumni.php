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
        <i><div class="fa fa-newspaper-o"></div></i> Lowongan dari Alumni
    </div>
    <div class="card-body">
        <div class="table table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th width="10%">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['lowongan'] as $key => $lowongan): ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $lowongan->posisi; ?></td>
                        <td><?php echo $lowongan->nama; ?></td>
                        <td>
                            <a onclick="return confirm('Lowongan akan ditampilkan dihalaman alumni!')" href="<?php echo url.'dashboard/validasi/lowongan/'.$lowongan->id ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-check-square-o"></i></a>
                        </td>
                    </tr> 
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>
</div>