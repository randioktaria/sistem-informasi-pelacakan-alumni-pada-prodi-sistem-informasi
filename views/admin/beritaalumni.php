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
        <i><div class="fa fa-newspaper-o"></div></i> Berita dari Alumni
    </div>
    <div class="card-body">
        <div class="table table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="">Judul</th>
                        <th width="">Author</th>
                        <th width="10%"></th>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['berita'] as $key => $berita): ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $berita->judul; ?></td>
                        <td><?php echo $berita->nama; ?></td>
                        <td>
                            <a onclick="return confirm('berita akan ditampilkan dihalaman utama!')" href="<?php echo url.'dashboard/validasi/berita/'.$berita->id ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-check-square-o"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>
</div>