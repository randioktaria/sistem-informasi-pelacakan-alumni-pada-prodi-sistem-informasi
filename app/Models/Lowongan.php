<?php
namespace app\models;

use Engine\Model;

class Lowongan extends Model
{

	public function ambil_semua_data_berdasarkan_status($status)
	{
		$stmt = $this->db->prepare("SELECT * FROM lowongan WHERE status = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function ambil_data_berdasarkan_id_alumni($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM lowongan WHERE id_alumni = ? ORDER BY tgl_post desc");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function hitung_lowongan_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT COUNT(*) as hitung FROM lowongan WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_OBJ);
	}

	public function ambil_lowongan_dari_alumni()
	{
		$stmt = $this->db->prepare("SELECT lowongan.id, posisi, nama FROM lowongan INNER JOIN alumni ON lowongan.id_alumni = alumni.id WHERE status IS NULL");
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function validasi_lowongan_dari_mahasiswa($status, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE lowongan SET status = ?, tgl_post = ? WHERE id = ?");
		$stmt->bindValue(1, $status, \PDO::PARAM_STR);
		$stmt->bindValue(2, $time, \PDO::PARAM_STR);
		$stmt->bindValue(3, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}

	public function tambah_data($posisi, $perusahaan, $deskripsi, $persyaratan, $lokasi, $carapendaftaran, $status, $time, $id_alumni = null)
	{

		$stmt = $this->db->prepare("INSERT INTO lowongan(id_alumni, posisi, perusahaan, deskripsi, persyaratan, lokasi, carapendaftaran, status, tgl_post) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");

		$stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
		$stmt->bindValue(2, $posisi, \PDO::PARAM_STR);
		$stmt->bindValue(3, $perusahaan, \PDO::PARAM_STR);
		$stmt->bindValue(4, $deskripsi, \PDO::PARAM_STR);
		$stmt->bindValue(5, $persyaratan, \PDO::PARAM_STR);
		$stmt->bindValue(6, $lokasi, \PDO::PARAM_STR);
		$stmt->bindValue(7, $carapendaftaran, \PDO::PARAM_STR);
		$stmt->bindValue(8, $status, \PDO::PARAM_STR);
		$stmt->bindValue(9, $time, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function ambil_data_berdasarkan_id($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM lowongan WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function update_data($posisi, $perusahaan, $deskripsi, $persyaratan, $lokasi, $carapendaftaran, $time, $id)
	{
		$stmt = $this->db->prepare("UPDATE lowongan SET posisi = ?, perusahaan = ?, deskripsi = ?, persyaratan = ?, lokasi = ?, carapendaftaran = ?, tgl_post = ? WHERE id = ?");

		$stmt->bindValue(1, $posisi, \PDO::PARAM_STR);
		$stmt->bindValue(2, $perusahaan, \PDO::PARAM_STR);
		$stmt->bindValue(3, $deskripsi, \PDO::PARAM_STR);
		$stmt->bindValue(4, $persyaratan, \PDO::PARAM_STR);
		$stmt->bindValue(5, $lokasi, \PDO::PARAM_STR);
		$stmt->bindValue(6, $carapendaftaran, \PDO::PARAM_STR);
		$stmt->bindValue(7, $time, \PDO::PARAM_STR);
		$stmt->bindValue(8, $id, \PDO::PARAM_INT);

		return $stmt->execute();
	}

	public function hapus_data($id) 
	{
		$stmt = $this->db->prepare("DELETE FROM lowongan WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}
}