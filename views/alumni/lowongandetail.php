<div class="container shadow" style="border-radius: 5px; padding-top: 10px; padding-bottom: 20px;">
	<div class="">
		<h3 style="color: #FF6600"><?php echo $data['lowongan']->posisi ?></h3>
        <?php echo $data['lowongan']->perusahaan ?>

        <div class="card shadow" style="margin-top: 10px;">
            <div class="card-body">
                <h5 class="text-secondary"><i class="fa fa-edit"></i> Deskripsi Pekerjaan</h5>
                <?php echo $data['lowongan']->deskripsi ?>
                
                <br><br>

                <b>Persyaratan</b>

                <br>

                <?php echo $data['lowongan']->persyaratan ?>
             </div>
        </div>
        <div class="card shadow" style="margin-top: 10px;">
            <div class="card-body">
                <h5 class="text-secondary"><i class="fa fa-map-marker"></i> Lokasi Kerja</h5>
                <i class="fa fa-building-o"></i> 
                <?php echo $data['lowongan']->lokasi ?>
             </div>
        </div>
        <div class="card shadow" style="margin-top: 10px;">
            <div class="card-body">
                <h5 class="text-secondary"><i class="fa fa-pencil"></i> Cara Pendaftaran</h5> 
                <?php echo $data['lowongan']->carapendaftaran ?>
             </div>
        </div>
        <div class="card shadow" style="margin-top: 10px; background-color: #fff;">
            <div class="card-body">
                <h6>Komentar</h6> 
                <form action="<?php echo url.'Komentar/create'; ?>" method="post">
                    <input type="hidden" name="id_alumni" value="<?php echo $data['alumni']->id; ?>">
                    <input type="hidden" name="id_lowongan" value="<?php echo $data['lowongan']->id; ?>">
                    <div class="form-group">
                        <textarea name="_komentar" id="" cols="30" rows="5" class="form-control" placeholder="Tulis Komentar Anda Disini"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Kirim Komentar</button>
                </form>
             </div>
             <div class="card-body">
                <h6><?php echo $data['komentar']->jml_komentar; ?> Komentar</h6>
                <?php 
                
                foreach ($data['komentar_'] as $data) : ?>
                
                
                    <div style="padding: 7px; background-color: #dfe3ea; border-radius: 5px">
                        <div class="media">
                            <img class="mr-3" src="<?php echo url.'image/avatar/img.jpg'; ?>" alt="Generic placeholder image" width="7%">
                            <div class="media-body">
                            <small>
                                <b><?php echo $data->nama; ?></b>
                                <i>Pada <?php echo $data->tgl_post ?></i> <br>
                                <?php echo $data->_komentar; ?>
                                </small>
                            </div>
                        </div>
                    </div>

                 <div class="my-2"></div>
                
                <?php endforeach ?>
             </div>
        </div>
	</div>
</div>