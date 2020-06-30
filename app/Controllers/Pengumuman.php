<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Pengumuman extends Controller
{
	public function __construct()
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('alumni/login');
		}

		$this->pengumuman = new \app\models\Pengumuman;
	}

	public function index()
	{
		$data = $this->pengumuman->get_status('P');
		$this->view('admin/pengumuman', $data);
	}

	public function add()
	{
		$this->view('admin/pengumumanadd');
	}

	public function create()
	{
		$judul  = @$_POST['judul'];
		$isi    = nl2br(@$_POST['isi']);
		$time   = date('Y-m-d H-i-s');
		$status = 'P';

		$simpan = $this->pengumuman->insert($judul, $isi, $time, $status);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil disimpan');
			$this->redirect('pengumuman');
		}
	}

	public function edit($id) 
	{
		$data = $this->pengumuman->find($id);
		$this->view('admin/pengumumanedit', $data);
	}

	public function update($id)
	{
		$judul = @$_POST['judul'];
		$isi   = nl2br(@$_POST['isi']);
		$time  = date('Y-m-d H-i-s');

		$simpan = $this->pengumuman->update($judul, $isi, $time, $id);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil update');
			$this->redirect('pengumuman');
		}
	}

	public function destroy($id)
	{
		$del = $this->pengumuman->delete($id);

		if ($del) {

			Flasher::set_message('berhasil', 'Data berhasil hapus');
			$this->redirect('pengumuman');
		}
	}
}