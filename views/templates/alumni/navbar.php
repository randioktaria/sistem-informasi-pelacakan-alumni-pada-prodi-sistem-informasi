<?php
$alumni = new \app\models\Alumni;
// mengambil data alumni berdasarkan username
$data['alumni'] = $alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);
?>
<div class="container content">
    <div class="row">
        <div class="col-lg-3" style="margin-top: 10px;">
            <div class="card shadow" style="text-align: center;">
                <ul class="list-group list-group-flush" style="color: #007bff">
                    <li class="list-group-item bgprofil"><a href=""><img src="<?php echo url.'image/avatar/img.jpg'; ?>" width="140px" class="img-thumbnail rounded-circle"></a></li>
                    <li class="list-group-item"><div style="font-family: fantasy;"><?php echo $data['alumni']->nama; ?></div><small><?php echo $data['alumni']->email; ?></small></li>
                    <li class="list-group-item"><a href="<?php echo url.'posting'; ?>" style="text-decoration: none;"><i class="fa fa-send"></i> Posting</a></li>
                    <li class="list-group-item"><a href="<?php echo url.'kuisioner/isi'; ?>" style="text-decoration: none;"><i class="fa fa-file-text"></i> Kuesioner</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9" style="margin-top: 10px;">
        <!-- Content -->