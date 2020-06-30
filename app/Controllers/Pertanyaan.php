<?php

namespace app\controllers;

use Engine\Auth;
use Engine\Flasher;
use Engine\Controller;

class Pertanyaan extends Controller
{

    public function __construct()
	{
		if (Auth::logged('status') != 'admin') { 
			$this->redirect('kuisioner/login');
		}

		$this->pertanyaan = new \app\Models\Pertanyaan;	
    }

    public function index()
    {
        $data = $this->pertanyaan->all();
        $this->view('admin/pertanyaan', $data);
    }
    
    public function add()
    {
        $data = $this->pertanyaan->getkuisioner();
        $this->view('admin/pertanyaanadd', $data);
    }

    public function create()
    {
        $id           = @$_POST['id'];
        $id_kuisioner = @$_POST['id_kuisioner'];
        $pertanyaan   = @$_POST['_pertanyaan'];
        $pilihan      = @$_POST['pilihan'];
        $time  = date('Y-m-d H-i-s');

        $simpan = $this->pertanyaan->insert($id, $id_kuisioner, $pertanyaan, $pilihan, $time);

        if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil disimpan');
			$this->redirect('pertanyaan');
			
		} else {
			$this->redirect('pertanyaan/add');
		}
    }

    public function edit($id)
    {
        $data = $this->pertanyaan->find($id);
        $this->view('admin/pertanyaanedit', $data);
    }

    public function update($id_)
    {
        $id           = $_POST['id'];
        $pertanyaan   = $_POST['_pertanyaan'];
        $pilihan      = $_POST['pilihan'];
        $time         = date('Y-m-d H-i-s');

        $simpan = $this->pertanyaan->update($id, $pertanyaan, $pilihan, $time, $id_);

        if ($simpan) {

			Flasher::set_message('berhasil', 'Data berhasil diupdate');
			$this->redirect('pertanyaan');
        }
    }
    
    public function destroy($id)
    {
        $del = $this->pertanyaan->delete($id);
        if ($del) {

			Flasher::set_message('berhasil', 'Data berhasil dihapus');
			$this->redirect('pertanyaan');	
		}
    }
}