<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Berita extends Controller
{
	public function __construct()
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('alumni/login');
		}

		$this->berita = new \app\Models\Berita;	
	}

	public function index() 
	{
		$data = $this->berita->ambil_semua_data_berdasarkan_status('P');
		$this->view('admin/berita', $data);
	}

	public function add() 
	{
		$this->view('admin/beritaadd');
	}

	public function create()
	{
		$judul   = @$_POST['judul'];
		$isi     = nl2br(@$_POST['isi']);
		$time    = date('Y-m-d H:i:s');
		$status  = 'P';

		$nmfoto  = @$_FILES['foto']['name'];
		$lokfoto = @$_FILES['foto']['tmp_name'];

		$path = 'image/berita/' .$nmfoto;

		if (is_uploaded_file($lokfoto)) {
			move_uploaded_file($lokfoto, $path);
		}

		$simpan = $this->berita->tambah_data($judul, $isi, $nmfoto, $time, $status);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil disimpan');
			$this->redirect('berita');
		}
	}

	public function edit($id)
	{
		$data = $this->berita->edit_data($id);
		$this->view('admin/beritaedit', $data);
	}

	public function update($id)
	{
		$judul   = @$_POST['judul'];
		$isi     = nl2br(@$_POST['isi']);
		$time    = date('Y-m-d H:i:s');

		$nmfoto  = @$_FILES['foto']['name'];
		$lokfoto = @$_FILES['foto']['tmp_name'];

		$path = 'image/berita/' .$nmfoto;

		$data = $this->berita->edit_data($id);

		if (is_uploaded_file($lokfoto)) {
			
			# jika upload foto baru, foto lama akan dihapus
			unlink('image/berita/'.$data->foto);
			move_uploaded_file($lokfoto, $path);
		} else {
			$nmfoto = $data->foto;
		}

		$simpan = $this->berita->update_data($judul, $isi, $nmfoto, $time, $id);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil diupdate');
			$this->redirect('berita');
		}
	}

	public function detail($id) 
	{
		$data = $this->berita->detail($id);
		$this->view('admin/beritadetail', $data);
	}

	public function destroy($id)
	{
		# mengambil data foto dari berita
		$data = $this->berita->edit_data($id);
		$del = $this->berita->hapus_data($id);

		if ($del) {
			# hapus foto dari direktori penyimpanan
			unlink('image/berita/'.$data->foto);
			Flasher::set_message('berhasil', 'Data berhasil hapus');
			$this->redirect('berita');
		}
	}
}