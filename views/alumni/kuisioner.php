<div class="container shadow bg-white" style="border-radius: 5px;">
    <div class="text-center" style="padding: 10px;">
        <table>
            <tr>
                <td width="20%"><img src="<?php echo url.'image/logo/upi.png'?>" alt="" width="100%"></td>
                <td>
                    <h4 class="text-center" style="font-weight: 700;">KUESIONER <em>TRACER STUDY</em></h4>
                    <h5 class="text-center">Universitas Putra Indonesia "YPTK" Padang</h5>
                </td>
                <td width="20%">&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

<div class="card shadow" style="margin-top: 10px;">
    <div class="card-body">

        <?php foreach ($data['kuisioner_list'] as $kuisioner_list) { ?>
            <a href="<?php echo url.'kuisioner/isi/'.$kuisioner_list->id ?>"><span class="badge badge-secondary"><?php echo $kuisioner_list->_kuisioner ?></span></a>
        <?php } ?>
        
        <br>

        <i><small><b style="color: red">Catatan: </b> Harap mengisi pertanyaan dengan baik dan benar, silakan isi tanda "-" untuk jawaban yang tidak anda miliki</small></i>

        <form method="post" action="<?php echo url.'kuisioner/jawab/'.$data['id_kuisioner'] ?>">

            <div class="table table-responsive">
                <table class="table table-striped table-sm" width="100%" style="margin-top: 3px">
                    <thead>
                        <tr>
                            <td colspan="2"><?php echo isset($data['kuisioner_judul']->_kuisioner) ? $data['kuisioner_judul']->ks_id .' '.$data['kuisioner_judul']->_kuisioner : '' ?></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['kuisioner_pertanyaan'] as $pertanyaan) : ?>
                            <tr>
                                <td><b><?php echo $pertanyaan->id ?></b></td>
                                <td width="95%">
                                    <?php if (empty($pertanyaan->pilihan)): ?>
                                        <div class="form-group">
                                            <label for="<?php echo $pertanyaan->_pertanyaan ?>"><?php echo $pertanyaan->_pertanyaan ?> : </label>
                                            <input type="text" name="pertanyaan[<?php echo $pertanyaan->id ?>]" id="<?php echo $pertanyaan->_pertanyaan ?>" class="form-control" value="<?php echo $pertanyaan->_jawaban; ?>" required>
                                        </div>
                                    <?php endif ?>
                                            
                                    <?php if (! empty($pertanyaan->pilihan)): ?>
                                        <div class="form-group">
                                            <label for="<?php echo $pertanyaan->_pertanyaan ?>"><?php echo $pertanyaan->_pertanyaan ?> : </label>
                                        <?php 
                                            $pilihan = explode(',', $pertanyaan->pilihan); 
                                            foreach ($pilihan as $key => $value) : ?>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <p>
                                                            <input class="form-check-input" type="radio" name="pertanyaan[<?php echo $pertanyaan->id ?>]" id="<?php echo $value ?>" value="<?php echo $value ?>" <?php echo ($pertanyaan->_jawaban === $value)? 'checked' : '' ?>>
                                                            <?php echo $value ?>
                                                        </p>
                                                    </label>
                                                </div>
                                            <?php endforeach ?>
                                    </div>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                            <tr>
                                <td colspan="2" class="text-center"><button type="submit" class="btn btn-primary btn-md btn-simpan tombol" <?php echo ! empty($pertanyaan->_jawaban)? 'disabled': '' ?>>SIMPAN</button></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>