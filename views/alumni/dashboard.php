<div class="container shadow bg-white" style="border-radius: 5px; padding-top: 10px; padding-bottom: 20px;">
  <div style="color: #007bff;">
    <div style="font-weight: 600; font-size: 18px;"><i class="fa fa-graduation-cap"></i> HALAMAN ALUMNI PRODI SISTEM INFORMASI <i class="fa fa-graduation-cap"></i></div>
    <small>Universitas Putra Indonesia YPTK Padang</small>
  </div>
</div>
<div class="card shadow" style="margin-top: 10px;">
  <div class="card-header">
    <i class="fa fa-fw fa-briefcase"></i> Lowongan Kerja Terbaru 
  </div>
  <div class="card-body" style="color: #007bff">
      <?php foreach ($data['lowongan'] as $key => $lowongan): ?>

             <a href="<?php echo 'lowongan/detail/'.$lowongan->id ?>" style="color: #FF6600; text-decoration: none;"><h5><?php echo $lowongan->posisi; ?></h5></a>
             <small><?php echo $lowongan->perusahaan; ?></small> <br>
             <i class="fa fa-map-marker"></i> <small><b><?php echo $lowongan->lokasi; ?></b></small>

             <hr style="border: 2px solid #dfe3ea; border-radius: 50px;"> 

      <?php endforeach ?>
  </div>
</div>