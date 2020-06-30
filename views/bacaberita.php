<div class="container">
    <div class="row">
        <h3><?php echo $data->judul; ?></h3>
    </div>
    <div class="row">
        <small><b><?php echo $data->tgl_post; ?></b></small>
    </div>
    <div class="row">
        <img src="<?php echo url.'image/berita/'.$data->foto; ?>" alt="" width="100%" class="img-thumbnail">
    </div>
    <div class="row text-justify" style="margin-top: 10px;">
        <?php echo $data->isi; ?>
    </div>
</div>