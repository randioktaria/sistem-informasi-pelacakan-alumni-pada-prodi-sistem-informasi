<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Alumni extends Controller
{
	
	public function __construct()
	{
		if (Auth::logged('status') != 'admin') { $this->redirect('admin/login'); }
		// membuat objek alumni dari folder models
		$this->alumni = new \app\models\Alumni;
	} 

	public function index()
	{	
		// mengambil semua data alumni
		$data['alumni'] = $this->alumni->ambil_semua_data();

		// front end
		$this->view('templates/admin/header');
		$this->view('templates/admin/navbar');
		$this->view('admin/alumni', $data);
		$this->view('templates/admin/footer');
	}

	public function add() 
	{
		// form tambah data alumni
		$this->view('templates/admin/header');
		$this->view('templates/admin/navbar');
		$this->view('admin/alumniadd');
		$this->view('templates/admin/footer');
	}

	public function create() 
	{
		$nobp     = @$_POST['nobp'];
		$nama     = @$_POST['nama'];
		$email    = @$_POST['email'];
		$username = @$_POST['username'];
		$password = md5(@$_POST['password']);

		# simpan data ke database
		$simpan = $this->alumni->tambah_data($nobp, $nama, $email, $username, $password);

		if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil disimpan');
			$this->redirect('alumni');
			
		} else {
			$this->redirect('alumni/add');
		}
	}

	public function edit($id)
	{
		# menampilkan data alumni berdasarkan id
		$data = $this->alumni->edit_data($id);

		$this->view('templates/admin/header');
		$this->view('templates/admin/navbar');
		$this->view('admin/alumniedit', $data);
		$this->view('templates/admin/footer');
	}

	public function update($id)
	{
		$nobp     = @$_POST['nobp'];
		$nama     = @$_POST['nama'];
		$email    = @$_POST['email'];
		$username = @$_POST['username'];

		# update data alumni
		$update = $this->alumni->update_data($nobp, $nama, $email, $username, $id);

		if ($update) {

			Flasher::set_message('berhasil', 'Data berhasil diupdate');
			$this->redirect('alumni');
		}
	}

	public function destroy($id)
	{
		# hapus data alumni berdasarkan id
		$del = $this->alumni->hapus_data($id);

		if ($del) {

			Flasher::set_message('berhasil', 'Data berhasil dihapus');
			$this->redirect('alumni');
		}
	}
}
