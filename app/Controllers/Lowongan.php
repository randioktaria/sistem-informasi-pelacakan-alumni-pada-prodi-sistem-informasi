<?php 

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Lowongan extends Controller
{
    public function __construct()
    {
        $this->lowongan = new \app\models\Lowongan;

    }

    public function index()
    {
        if (Auth::logged('status') != 'admin') { 
            $this->redirect('alumni/login');
        }

        $data['lowongan'] = $this->lowongan->ambil_semua_data_berdasarkan_status('P');
        $this->view('admin/lowongan', $data);
    }

    public function add()
    {
        if (Auth::logged('status') != 'admin') { 
            $this->redirect('alumni/login');
        }

        $this->view('admin/lowonganadd');
    }

    public function create()
    {
        $posisi           = @$_POST['posisi'];
        $perusahaan       = @$_POST['perusahaan'];
        $deskripsi        = nl2br(@$_POST['deskripsi']);
        $persyaratan      = nl2br(@$_POST['persyaratan']);
        $lokasi           = nl2br(@$_POST['lokasi']);
        $carapendaftaran  = nl2br(@$_POST['carapendaftaran']);
        $status           = 'P';
        $time             = date('Y-m-d H:i:s');

        $simpan = $this->lowongan->tambah_data($posisi, $perusahaan, $deskripsi, $persyaratan, $lokasi, $carapendaftaran, $status, $time);

        if ($simpan) {
            
            Flasher::set_message('berhasil', 'Data berhasil disimpan');
            $this->redirect('lowongan');
        }
    }

    public function edit($id) 
    {
        if (Auth::logged('status') != 'admin') { 
            $this->redirect('alumni/login');
        }

        $data = $this->lowongan->ambil_data_berdasarkan_id($id);
        $this->view('admin/lowonganedit', $data);
    }

    public function update($id)
    {
        $posisi           = @$_POST['posisi'];
        $perusahaan       = @$_POST['perusahaan'];
        $deskripsi        = @$_POST['deskripsi'];
        $persyaratan      = @$_POST['persyaratan'];
        $lokasi           = @$_POST['lokasi'];
        $carapendaftaran  = @$_POST['carapendaftaran'];
        $time             = date('Y-m-d H:i:s');

        $simpan = $this->lowongan->update_data($posisi, $perusahaan, $deskripsi, $persyaratan, $lokasi, $carapendaftaran, $time, $id);

        if ($simpan) {
            
            Flasher::set_message('berhasil', 'Data berhasil diupdate');
            $this->redirect('lowongan');
        }
    }

    public function destroy($id)
    {
        $del  = $this->lowongan->hapus_data($id);

        if ($del) {

            Flasher::set_message('berhasil', 'Data berhasil hapus');
            $this->redirect('lowongan');
        }
    }

    public function detail($id) 
    {
        if (Auth::logged('status') != 'alumni') { 
            $this->redirect('secure');
        }

        $komentar = new \app\models\Komentar;
        $alumni = new \app\models\Alumni;

        $data['lowongan'] = $this->lowongan->ambil_data_berdasarkan_id($id);
        $data['alumni']   = $alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);
        $data['komentar_'] = $komentar->cek_komentar($id);
        $data['komentar'] = $komentar->hitung_komentar($id); 
        

        $this->view('templates/alumni/header');
        $this->view('templates/alumni/navbar');
        $this->view('alumni/lowongandetail', $data);
        $this->view('templates/alumni/footer');
    }
}