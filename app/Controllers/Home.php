<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Controller;

class Home extends Controller
{

	public function index()
	{
		$berita = new \app\Models\Berita;	
		$pengumuman = new \app\Models\Pengumuman;
		$data['berita'] = $berita->ambil_semua_data_berdasarkan_status('P');
		$data['pengumuman'] = $pengumuman->get_status('P');
		
		$this->view('templates/home/header');
		$this->view('templates/home/navbar', $data);
		$this->view('templates/home/footer');
	}

	public function berita($id)
	{
		$berita = new \app\Models\Berita;	
		$data = $berita->edit_data($id);

		$this->view('bacaberita', $data);
	}

	public function Pengumuman($id)
	{
		$pengumuman = new \app\Models\Pengumuman;	
		$data = $pengumuman->find($id);

		$this->view('bacapengumuman', $data);
	}
}