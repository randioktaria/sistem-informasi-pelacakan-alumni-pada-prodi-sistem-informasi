<?php
namespace app\models;

use Engine\Model;

class Pengumuman extends Model
{
	public function get_status($status)
	{
		$stmt = $this->db->prepare("SELECT * FROM pengumuman WHERE status = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);;
	}

	public function ambil_data_berdasarkan_id_alumni($id) 
	{
		$stmt = $this->db->prepare("SELECT * FROM pengumuman WHERE id_alumni = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function hitung_pengumuman_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT COUNT(*) as hitung FROM pengumuman WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_OBJ);
	}

	public function validasi_pengumuman_dari_mahasiswa($status, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE pengumuman SET status = ?, tgl_post = ? WHERE id = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);
		$stmt->bindValue(2, $time, \PDO::PARAM_STR);
		$stmt->bindValue(3, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}

	public function ambil_pengumuman_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT pengumuman.id, judul, nama FROM pengumuman INNER JOIN alumni ON pengumuman.id_alumni = alumni.id WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function insert($judul, $isi, $time, $status, $id_alumni = null)
	{
		$stmt = $this->db->prepare("INSERT INTO pengumuman(id_alumni, judul, isi, status, tgl_post) VALUES(?, ?, ?, ?, ?)");
		$stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
		$stmt->bindValue(2, $judul, \PDO::PARAM_STR);
		$stmt->bindValue(3, $isi, \PDO::PARAM_STR);
		$stmt->bindValue(4, $status, \PDO::PARAM_STR);
		$stmt->bindValue(5, $time, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function find($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM pengumuman WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function update($judul, $isi, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE pengumuman SET judul = ?, isi = ?, tgl_post = ? WHERE id = ?");
		$stmt->bindValue(1, $judul, \PDO::PARAM_STR);
		$stmt->bindValue(2, $isi, \PDO::PARAM_STR);
		$stmt->bindValue(3, $time, \PDO::PARAM_STR);
		$stmt->bindValue(4, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}

	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM pengumuman WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}
}