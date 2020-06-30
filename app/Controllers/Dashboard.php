<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Controller;
use Engine\Flasher;

class Dashboard extends Controller
{

	public function index()
	{
		$berita = new \app\models\Berita;
		$pengumuman = new \app\models\Pengumuman;
		$lowongan = new \app\models\Lowongan;
		$jawaban = new \app\models\Jawaban;
		$alumni = new \app\models\Alumni;

		if (Auth::logged('status') === 'admin') {

			// menghitung jumlah berita yang di post mahasiswa
			$data['berita'] = $berita->hitung_berita_dari_alumni();
			
			// menghitung jumlah pengumuman yang di post mahasisa
			$data['pengumuman'] = $pengumuman->hitung_pengumuman_dari_alumni();

			// menghitung jumlah lowongan yang di post mahasisa
			$data['lowongan'] = $lowongan->hitung_lowongan_dari_alumni();

			// hitung jumlah kuesioner mahasiswa yang telah dijawab alumni
			$data['kuisioner'] = $jawaban->hitung_id_alumni();

			$data['alumni_angkatan'] = $alumni->cek_angkatan_alumni();
	

			// tampilkan halaman home admin
			$this->view('templates/admin/header');
			$this->view('templates/admin/navbar');
			$this->view('admin/dashboard', $data);
			$this->view('templates/admin/footer'); 

		} else

		if (Auth::logged('status') === 'alumni') {

			// mengumbil data lowongan berdasarkan status
			$data['lowongan'] = $lowongan->ambil_semua_data_berdasarkan_status('P');
			
			// tampilan halaman home alumni 
			$this->view('templates/alumni/header');
			$this->view('templates/alumni/navbar');
			$this->view('alumni/dashboard', $data); 
			$this->view('templates/alumni/footer');

		} else {

		$this->redirect('secure');

		}
	}

	public function list($postingan, $tahun = '')
	{
		if (Auth::logged('status') != 'admin') { $this->redirect('admin/login'); }

		if ($postingan === 'berita') {
			$berita = new \app\models\Berita;
			$data['berita'] = $berita->ambil_berita_dari_alumni();

			$this->view('templates/admin/header');
			$this->view('templates/admin/navbar');
			$this->view('admin/beritaalumni', $data);
			$this->view('templates/admin/footer');
		
		} elseif ($postingan === 'pengumuman') {
			$pengumuman = new \app\models\Pengumuman;
			$data['pengumuman'] = $pengumuman->ambil_pengumuman_dari_alumni();

			$this->view('templates/admin/header');
			$this->view('templates/admin/navbar');
			$this->view('admin/pengumumanalumni', $data);
			$this->view('templates/admin/footer');
		
		} elseif($postingan === 'lowongan') {
			$lowongan = new \app\models\Lowongan;
			$data['lowongan'] = $lowongan->ambil_lowongan_dari_alumni();

			$this->view('templates/admin/header');
			$this->view('templates/admin/navbar');
			$this->view('admin/lowonganalumni', $data);
			$this->view('templates/admin/footer');
		
		} elseif($postingan === 'kuisioner') {
			$alumni = new \app\models\Alumni;
			$this->jawaban = new \app\models\Jawaban;

			$data['tahun'] = @$_POST['tahun'];
			$data['pilihan'] = @$_POST['pilihan'];

			if ($data['pilihan'] === 'angkatan') {

				$data['alumni'] = $alumni->data_alumni_isi_kuisioner($data['pilihan'], @$_POST['tahun']);

			} elseif ($data['pilihan'] === 'post') {

				$data['alumni'] = $alumni->data_alumni_isi_kuisioner($data['pilihan'], @$_POST['tahun']);
			} else {

				$data['alumni'] = $alumni->data_alumni_isi_kuisioner();
			}

			
			$this->view('templates/admin/header');
			$this->view('templates/admin/navbar');
			$this->view('admin/kuisioneralumni', $data);
			$this->view('templates/admin/footer');
		
		}
	}

	public function cetaklistkuisioner($pilihan = '', $tahun = '')
	{
		if (Auth::logged('status') != 'admin') { $this->redirect('admin/login'); }

		$alumni = new \app\models\Alumni;
		$this->jawaban = new \app\models\Jawaban;

		if ($pilihan == 'angkatan') {

			$data['alumni'] = $alumni->data_alumni_isi_kuisioner($pilihan, $tahun);

		} elseif ($pilihan == 'post') {

			$data['alumni'] = $alumni->data_alumni_isi_kuisioner($pilihan, $tahun);

		} else {
			$data['alumni'] = $alumni->data_alumni_isi_kuisioner();
		}

		$data['tahun'] = $tahun;
		$data['pilihan'] = $pilihan;

		$this->view('admin/kuisioneralumnicetak', $data);

	}


	public function validasi($postingan, $id)
	{
		if (Auth::logged('status') != 'admin') { $this->redirect('admin/login'); }

		if ($postingan === 'berita') {
			$berita = new \app\models\Berita;
			$time = date('Y-m-d H:i:s');

			$valid = $berita->validasi_berita_dari_mahasiswa('P', $time, $id);

			if ($valid) {

				Flasher::set_message('berhasil', 'Data berhasil divalidasi');
				$this->redirect('dashboard/list/berita');
			}
		
		} elseif ($postingan === 'pengumuman') {
			$pengumuman = new \app\models\Pengumuman;
			$time = date('Y-m-d H:i:s');

			$valid = $data['pengumuman'] = $pengumuman->validasi_pengumuman_dari_mahasiswa('P', $time, $id);

			if ($valid) {

				Flasher::set_message('berhasil', 'Data berhasil divalidasi');
				$this->redirect('dashboard/list/pengumuman');
			}
			
		} elseif ($postingan === 'lowongan') {
			$lowongan = new \app\models\Lowongan;

			$time = date('Y-m-d H:i:s');

			$valid = $data['lowongan'] = $lowongan->validasi_lowongan_dari_mahasiswa('P', $time, $id);

			if ($valid) {

				Flasher::set_message('berhasil', 'Data berhasil divalidasi');
				$this->redirect('dashboard/list/lowongan');
			}
		}
	
	}
}