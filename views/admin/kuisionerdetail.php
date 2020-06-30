<div class="card">
    <div class="card-body">
        <div class="text-center">
            <h3 style="font-weight: 650; padding: 10px;">KUESIONER <em>TRACER STUDY</em></h3>
        </div>

        <div class="container shadow-sm" style="padding: 20px; 10px; border-radius: 5px; margin-top: -60px;">
            <a href="<?php echo url.'kuisioner/cetak/'.$data['id_alumni']; ?>" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-print"></i></a> <p>
            <?php
            $data['kuisioner'] = $this->kuisioner->all();
            foreach ($data['kuisioner'] as $key => $kuisioner): ?>

                    <div class="table table-responsive">
                        <table class="table table-hover table-sm">
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
</div>