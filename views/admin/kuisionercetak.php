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

    <link href="<?php echo url. 'assets/css/my-style-admin.css' ?>" rel="stylesheet">
</head>

<body>    
<div class="container">
    <div class="text-center" style="padding: 10px;">
        <table width="100%">
            <tr>
                <td width="20%"><img src="<?php echo url.'image/logo/upi.png'?>" alt="" width="80%"></td>
                <td>
                    <h3 class="text-center text-danger" style="font-weight: 700;">KUISIONER <em>TRACER STUDY</em></h3>
                    <h4 class="text-center">Universitas Putra Indonesia "YPTK" Padang</h4>
                </td>
                <td width="20%">&nbsp;</td>
            </tr>
        </table>
    </div>

            <?php
            $data['kuisioner'] = $this->kuisioner->all();
            foreach ($data['kuisioner'] as $key => $kuisioner): ?>
                    <div class="table table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th colspan="3"><?php echo $kuisioner->id. ' ' .$kuisioner->_kuisioner ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="45%" class="bg-light"><b><em>Pertanyaan</em></b></td>
                                    <td width="3%" class="bg-light"></td>
                                    <td class="bg-light"><b><em>Jawaban</em></b></td>
                                </tr>
                                
                                <?php $data['pertanyaan'] = $this->pertanyaan->ambil_pertanyaan_dan_jawaban($data['id_alumni'], $kuisioner->id);
                                foreach ($data['pertanyaan'] as $key => $pertanyaan) : ?>
                                    <tr>
                                        <td><?php echo $pertanyaan->_pertanyaan ?></td>
                                        <td><b>:</b></td>
                                        <td><?php echo $pertanyaan->_jawaban ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
            <?php endforeach ?>
         
        </div>
    </div>
    
    <script>
        window.print();
    </script>

</body>
</html>