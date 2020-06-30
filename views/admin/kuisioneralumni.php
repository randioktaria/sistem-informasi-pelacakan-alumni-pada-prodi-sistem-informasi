<div class="card shadow">
    <div class="card-header">
        <i class="fa fa-fw fa-file-text-o"></i> Kuisioner Alumni
    </div>
    <div class="card-body">

                <form action="<?php echo url. 'dashboard/list/kuisioner' ?>" method="post" class="form-inline">
                <div class="form-group mx-sm-2">
                        <select name="pilihan" id="" class="form-control-sm">
                            <option value="">cari berdasarkan</option>
                            <option value="angkatan">angkatan</option>
                            <option value="post">tahun pengisian</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-2">
                        <input type="text" name="tahun" id="" class="form-control-sm" placeholder="inputkan tahun">
                    </div>
                    <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-search"></i></button>
                   
                    <div class="form-group mx-sm-2">
                        <a href="<?php echo url .'dashboard/cetaklistkuisioner/'.@$data['pilihan'].'/'.@$data['tahun'] ?>" target="_blank" class="btn btn-sm btn-outline-secondary"><i class="fa fa-print"></i></a>
                    </div>
                </form>
        

        <div class="my-3"></div>

        <div class="table table-responsive">
            <table class="table table-striped table-bordered table-sm" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>NO</th>
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
                        <th>Tahun Post</th>
                        <th>&nbsp;</th>
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
                        <td>
                            <a href="<?php echo url.'kuisioner/detail/'.$alumni->ida; ?>" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-file-text-o"></i></a>
                        </td>
                    </tr>

                   <?php endforeach ?>

                </tbody>
            </table>
    </div>
</div>