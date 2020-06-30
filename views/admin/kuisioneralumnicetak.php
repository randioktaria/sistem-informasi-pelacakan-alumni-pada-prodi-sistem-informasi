<!DOCTYPE html>
<head lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman | Administrator</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo url. 'assets/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">
</head>

<body onload="window.print()">


    <div class="text-center" style="padding: 10px;">
        <table width="100%" style="margin-top: 20px">
            <tr>
                <td width="20%"><img src="<?php echo url.'image/logo/upi.png'?>" alt="" width="150px;"></td>
                <td>
                <h6>Yayasan Perguruan Tinggi Komputer "YPTK" Padang</h6>
                <h3 class="text-primary" style="margin-top: -5px">Fakultas Ilmu Komputer</h3>
                <h5 class="text-danger" style="margin-top: -5px">Universitas Putra Indonesia "YPTK" Padang</h5>
                </td>
                <td width="20%">&nbsp;</td>
            </tr>
        </table>
        <small><em>Jalan Raya Lubuk Begalung, Padang , Telp (0751) 776666, 775246, Faks. 71913, E-mail: admin@upiyptk.ac.id
homepage:  www.upiyptk.ac.id
</em></small>
    </div>

    <hr style="border: 1px solid #000; margin-top: -8px">

    <div style="margin-bottom: 60px">

        <div class="text-center">
            <b>LAPORAN DATA ALUMNI PRODI SISTEM INFORMASI</b>
            <?php if ($data['pilihan'] === 'angkatan') :?>
                    <b>ANGKATAN <?php echo $data['tahun'] ?></b>
            <?php elseif ($data['pilihan'] === 'post'): ?>
                    <b>BERDASARKAN TAHUN PENGISIAN <?php echo $data['tahun'] ?></b>
            <?php endif ?>
        </div>

    </div>
        
            <table class="tabel table-striped table-bordered table-sm" width="100%" cellspacing="0">
                <thead class="text-center text-white" style="background-color: #d3b22e">
                    <tr>
                        <th>No</th>
                        <th>NAMA LENGKAP</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>EMAIL</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>ANGKATAN</th>
                        <th>BULAN LULUS</th>
                        <th>TAHUN LULUS</th>
                        <th>PEKERJAAN</th>
                        <th>TAHUN POST</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data['alumni'] as $key => $alumni): ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $alumni->nama ?></td>
                        <td><?php echo $alumni->tempat_lahir ?></td>
                        <td><?php echo $alumni->tanggal_lahir ?></td>
                        <td><?php echo $alumni->jenis_kelamin ?></td>
                        <td><?php echo $alumni->email ?></td>
                        <td><?php echo $alumni->telepon ?></td>
                        <td><?php echo $alumni->alamat ?></td>
                        <td><?php echo $alumni->angkatan ?></td>
                        <td><?php echo $alumni->bulan_lulus ?></td>
                        <td><?php echo $alumni->tahun_lulus ?></td>
                        <td><?php echo ! empty($alumni->pekerjaan) ? $alumni->pekerjaan : '-' ?></td>
                        <td><?php echo substr($alumni->publish, 0, 4) ?></td>
                    </tr>
                   <?php endforeach ?>
                </tbody>
            </table>


</div>
<table width="100%" style="margin-top: 30px">
                <tr>
                    <td width="70%"></td>
                    <td width="30%">
                        <div class="text-center">
                        Hormat Kami, <br>
                        Fakultas Ilmu Komputer

                        <br><br><br>

                        <b>Sri Rahmawati, S.Kom, M.Kom</b> <br>
                        Ka Jurusan Sistem Informasi
                        </div>
                    </td>
                </tr>
            </table>
</body>
</html>