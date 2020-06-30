<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Posting extends Controller
{
    
    public function __construct()
    {
        if (Auth::logged('status') != 'alumni') {
            $this->redirect('secure');
        }

        $this->alumni = new \app\models\Alumni;
        $this->berita = new \app\models\Berita;
        $this->pengumuman = new \app\models\Pengumuman;
        $this->lowongan = new \app\models\Lowongan;
    }

    public function index()
    {
        $id_alumni = $this->alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);

        // mengambil data berdasarkan id alumni
        $data['berita'] = $this->berita->ambil_data_berdasarkan_id_alumni($id_alumni->id);
        $data['pengumuman'] = $this->pengumuman->ambil_data_berdasarkan_id_alumni($id_alumni->id);
        $data['lowongan'] = $this->lowongan->ambil_data_berdasarkan_id_alumni($id_alumni->id);

        $this->view('templates/alumni/header');
        $this->view('templates/alumni/navbar');
        $this->view('alumni/posting', $data);
        $this->view('templates/alumni/footer');
    }

    public function add($post)
    {
        if ($post === 'berita') {
            $this->view('templates/alumni/header');
            $this->view('templates/alumni/navbar');
            $this->view('alumni/beritaadd');
            $this->view('templates/alumni/footer');

        } elseif ($post === 'pengumuman') {
            $this->view('templates/alumni/header');
            $this->view('templates/alumni/navbar');
            $this->view('alumni/pengumumanadd');
            $this->view('templates/alumni/footer');

        } elseif ($post === 'lowongan') {
            $this->view('templates/alumni/header');
            $this->view('templates/alumni/navbar');
            $this->view('alumni/lowonganadd');
            $this->view('templates/alumni/footer');
        }
       
    }

    public function create($post)
    {

        $id_alumni = $this->alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);

        if ($post === 'berita') {

            $judul   = @$_POST['judul'];
            $isi     = nl2br(@$_POST['isi']);
            $time    = date('Y-m-d H:i:s');

            $nmfoto  = @$_FILES['foto']['name'];
            $lokfoto = @$_FILES['foto']['tmp_name'];

            $path = 'image/berita/' .$nmfoto;

            if (is_uploaded_file($lokfoto)) {
                move_uploaded_file($lokfoto, $path);
            }

            $simpan = $this->berita->tambah_data($judul, $isi, $nmfoto, $time, $status = null, $id_alumni->id);

            if ($simpan) {

                Flasher::set_message('berhasil', 'Data berhasil disimpan');
                $this->redirect('posting');
            }

        } elseif ($post === 'pengumuman') {

            $judul  = @$_POST['judul'];
            $isi    = nl2br(@$_POST['isi']);
            $time   = date('Y-m-d H-i-s');
            
            $simpan = $this->pengumuman->insert($judul, $isi, $time, $status = null, $id_alumni->id);

            if ($simpan) {

                Flasher::set_message('berhasil', 'Data berhasil disimpan');
                $this->redirect('posting');
            }

        } elseif ($post === 'lowongan') {

            $posisi           = @$_POST['posisi'];
            $perusahaan       = @$_POST['perusahaan'];
            $deskripsi        = nl2br(@$_POST['deskripsi']);
            $persyaratan      = nl2br(@$_POST['persyaratan']);
            $lokasi           = nl2br(@$_POST['lokasi']);
            $carapendaftaran  = nl2br(@$_POST['carapendaftaran']);
            $status           = null;
            $time             = date('Y-m-d H:i:s');

            $simpan = $this->lowongan->tambah_data($posisi, $perusahaan, $deskripsi, $persyaratan, $lokasi, $carapendaftaran, $status, $time, $id_alumni->id);

            if ($simpan) {
                
                Flasher::set_message('berhasil', 'Data berhasil disimpan');
                $this->redirect('posting');
            }
        }
    }

    
}