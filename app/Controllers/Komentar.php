<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Komentar extends Controller
{
    public function __construct()
    {
        $this->komentar = new \app\models\Komentar;
    }

    public function create()
    {

        $id_alumni = @$_POST['id_alumni'];
        $id_lowongan = @$_POST['id_lowongan'];
        $komentar = @$_POST['_komentar'];
        $tgl_post    = date('Y-m-d H:i:s');

        $simpan = $this->komentar->tambah_data($id_alumni, $id_lowongan, $komentar, $tgl_post);

        $this->redirect('lowongan/detail/'.$id_lowongan);

    }
}