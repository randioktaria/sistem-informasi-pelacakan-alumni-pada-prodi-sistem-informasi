<?php

namespace app\models;

use Engine\Model;

class Berita extends Model
{
	
	public function ambil_semua_data_berdasarkan_status($status)
	{
		$stmt = $this->db->prepare("SELECT * FROM berita WHERE status = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function ambil_data_berdasarkan_id_alumni($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM berita WHERE id_alumni = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function hitung_berita_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT COUNT(*) as hitung FROM berita WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_OBJ);
	}

	public function ambil_berita_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT berita.id, judul, nama FROM berita INNER JOIN alumni ON berita.id_alumni = alumni.id WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function validasi_berita_dari_mahasiswa($status, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE berita SET status = ?, tgl_post = ? WHERE id = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);
		$stmt->bindValue(2, $time, \PDO::PARAM_STR);
		$stmt->bindValue(3, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}

	public function tambah_data($judul, $isi, $foto, $time, $status, $id_alumni = null)
	{
		
		$stmt = $this->db->prepare("INSERT INTO berita(id_alumni, judul, isi, foto, status, tgl_post) VALUES(?, ?, ?, ?, ?, ?)");

		$stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
		$stmt->bindValue(2, $judul, \PDO::PARAM_STR);
		$stmt->bindValue(3, $isi, \PDO::PARAM_STR);
		$stmt->bindValue(4, $foto, \PDO::PARAM_STR);
		$stmt->bindValue(5, $status, \PDO::PARAM_STR);
		$stmt->bindValue(6, $time, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function edit_data($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM berita WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function update_data($judul, $isi, $foto, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE berita SET judul= ?, isi= ?, foto= ?, tgl_post= ? WHERE id = ?");
		$stmt->bindValue(1, $judul, \PDO::PARAM_STR);
		$stmt->bindValue(2, $isi, \PDO::PARAM_STR);
		$stmt->bindValue(3, $foto, \PDO::PARAM_STR);
		$stmt->bindValue(4, $time, \PDO::PARAM_STR);
		$stmt->bindValue(5, $id, \PDO::PARAM_INT);

		return $stmt->execute();
	}

	public function detail($id) 
	{
		$stmt = $this->db->prepare("SELECT * FROM berita WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function hapus_data($id)
	{
		$stmt = $this->db->prepare("DELETE FROM berita WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}
}