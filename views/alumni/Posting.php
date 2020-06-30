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
  <div class="card-body">
     <a href="<?php echo url.'posting/add/berita'?>"><button class="btn btn-primary btn-sm btn-simpan tombol">Tambah</button></a> 

    <div class="my-2"></div>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td colspan="3">Post Berita</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['berita'] as $key => $berita) : ?>
                    <tr>
                        <td><?php echo $key+1 ?>. </td>
                        <td width="85%"><?php echo $berita->judul; ?></td>
                        <td>
                            <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <hr style="border: 2px solid #dfe3ea; border-radius: 50px;"> 

    <a href="<?php echo url.'posting/add/pengumuman'?>"><button class="btn btn-primary btn-sm btn-simpan tombol">Tambah</button></a> <div class="my-2"></div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td colspan="3">Post Pengumuman</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['pengumuman'] as $key => $pengumuman) : ?>
                    <tr>
                        <td><?php echo $key+1 ?>. </td>
                        <td width="85%"><?php echo $pengumuman->judul; ?></td>
                        <td>
                            <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <hr style="border: 2px solid #dfe3ea; border-radius: 50px;"> 

    <a href="<?php echo url.'posting/add/lowongan'?>"><button class="btn btn-primary btn-sm btn-simpan tombol">Tambah</button></a> <div class="my-2"></div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td colspan="3">Post Lowongan Kerja</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['lowongan'] as $key => $lowongan) : ?>
                    <tr>
                        <td><?php echo $key+1 ?>. </td>
                        <td width="85%"><?php echo $lowongan->posisi; ?></td>
                        <td>
                            <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>


  </div>
</div>