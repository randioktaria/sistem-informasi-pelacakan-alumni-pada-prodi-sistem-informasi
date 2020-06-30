<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

Class Kuisioner extends Controller
{

	public function __construct()
	{
		$this->kuisioner = new \app\models\Kuisioner;
		$this->pertanyaan = new \app\models\Pertanyaan;
		$this->kuisioner = new \app\models\Kuisioner;
	}

	public function index()
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('admin');
		}

		$data = $this->kuisioner->all();
		$this->view('admin\kuisioner', $data);
	}

	public function add()
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('admin');
		}

		$this->view('admin\kuisioneradd');
	}

	public function create()
	{
		$id         = @$_POST['id'];
 		$kuisioner  = @$_POST['kuisioner'];
		$time       = date('Y-m-d H:i:s');

		$simpan = $this->kuisioner->insert($id, $kuisioner, $time);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil disimpan');
			$this->redirect('kuisioner');
			
		} else {
			$this->redirect('kuisioner/add');
		}
	}

	public function edit($id)
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('admin');
		}

		$this->view('admin/kuisioneradd', $this->kuisioner->find($id));
	}

	public function update($id)
	{
		$id_        = @$_POST['id'];
 		$kuisioner  = @$_POST['kuisioner'];
		$time       = date('Y-m-d H:i:s');

		$simpan = $this->kuisioner->update($id_, $kuisioner, $time, $id);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil diupdate');
			$this->redirect('kuisioner');
			
		} else {
			
			Flasher::set_message('berhasil', 'Data gagal diupdate');
			$this->redirect('kuisioner');
		}
	}

	public function destroy($id)
	{
		$del = $this->kuisioner->delete($id);
		if ($del) {

			Flasher::set_message('berhasil', 'Data berhasil dihapus');
			$this->redirect('kuisioner');

		}

	}

	// detail pertanyaan kuisioner yang telah diisi alumni pada admin.
	public function detail($id_alumni)
	{
		$data['id_alumni'] = $id_alumni;
		
		$this->view('templates/admin/header');
		$this->view('templates/admin/navbar');
		$this->view('admin/kuisionerdetail', $data);
		$this->view('templates/admin/footer');
	}

	public function cetak($id_alumni)
	{
		$data['id_alumni'] = $id_alumni;
		$this->view('admin/kuisionercetak', $data);
	}
	

	// Halaman untuk alumni
	// -----------------------------------------

	public function isi($id_kuisioner = 'A')
	{
		if (Auth::logged('status') != 'alumni') { 
			$this->redirect('secure');
		}

		$jawaban = new \app\models\Jawaban;
		$alumni = new \app\models\Alumni;

		$id_alumni = $alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);
		
		$data['id_kuisioner'] = $id_kuisioner;
		# mengambil data yang diperlukan
		$data['kuisioner_list']       = $this->kuisioner->all();
		$data['kuisioner_pertanyaan'] = $this->pertanyaan->ambil_pertanyaan_berdasarkan_id_kuisioner($id_alumni->id, $id_kuisioner);
		$data['kuisioner_judul']      = $this->pertanyaan->ambil_pertanyaan_berdasarkan_id_kuisioner($id_alumni->id, $id_kuisioner, true);
		
		# front end
		$this->view('templates/alumni/header');
		$this->view('templates/alumni/navbar');
		$this->view('alumni/kuisioner', $data);
		$this->view('templates/alumni/footer');
	}

	public function jawab($id_kuisioner)
	{
		if (Auth::logged('status') != 'alumni') { 
			$this->redirect('secure');
		}

		$jawaban = new \app\models\Jawaban;
		$alumni  = new \app\models\Alumni;

		$id_alumni = $alumni->ambil_data_alumni_berdasarkan_username($_SESSION['username']);
		$pertanyaan = @$_POST['pertanyaan'];
		$time  = date('Y-m-d H:i:s');
		

		foreach ($pertanyaan as $key => $jawab) {
			$jawaban->simpan_jawaban($id_alumni->id, $key, $jawab, $time);
			$jawaban->update_waktu_jawab($id_alumni->id, $time);

			if ($key === 'A2') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$jawab, // jenis_kelamin
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'A4') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($jawab, // tempat_lahir
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'A5') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$jawab, // tanggal_lahir
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'A8') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$jawab, // email
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'A9') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$jawab, // telepon
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'A7') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$jawab, // alamat
										$data_alumni->angkatan, 
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'B1') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$jawab, // tahun_masuk (angkatan)
										$data_alumni->tahun_lulus, 
										$data_alumni->bulan_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'B2') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$jawab, // bulan_lulus 
										$data_alumni->tahun_lulus, 
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'B3') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->bulan_lulus, 
										$jawab, // tahun_lulus
										$data_alumni->pekerjaan, 
										$id_alumni->id);
			}

			if ($key === 'C2') {
				$data_alumni = $alumni->edit_data($id_alumni->id);
				$alumni->lengkapi_data($data_alumni->tempat_lahir, 
										$data_alumni->tanggal_lahir, 
										$data_alumni->jenis_kelamin, 
										$data_alumni->email, 
										$data_alumni->telepon, 
										$data_alumni->alamat, 
										$data_alumni->angkatan, 
										$data_alumni->bulan_lulus, 
										$data_alumni->tahun_lulus, 
										$jawab, // jabatan (pekerjaans)
										$id_alumni->id);
			}

			
		}

		$this->redirect('kuisioner/isi/'.$id_kuisioner);

		
		 

	}
} 