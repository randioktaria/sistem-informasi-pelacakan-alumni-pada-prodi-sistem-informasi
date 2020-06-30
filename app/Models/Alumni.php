<?php
namespace app\models;

use Engine\Model;

class Alumni extends Model
{
	
	public function ambil_semua_data()
	{
		$stmt = $this->db->prepare("SELECT * FROM alumni");
		$stmt->execute();
		$result = $stmt->fetchAll(\PDO::FETCH_OBJ);
		return $result;
	}

	public function cek_username_password($username, $password)
	{
		$stmt = $this->db->prepare("SELECT username, password FROM alumni WHERE username = ? AND password = ? ");
		$stmt->bindValue(1, $username, \PDO::PARAM_STR);
		$stmt->bindValue(2, $password, \PDO::PARAM_STR);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function ambil_data_alumni_berdasarkan_username($session)
	{
		$stmt = $this->db->prepare("SELECT id, nama, email FROM alumni WHERE username = ?");
		$stmt->bindValue(1, $session, \PDO::PARAM_STR);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function tambah_data($nobp, $nama, $email, $username, $password)
	{
		$stmt = $this->db->prepare("INSERT INTO alumni(nobp, nama, email, username, password) VALUES(?, ?, ?, ?, ?)");

		$stmt->bindValue(1, $nobp, \PDO::PARAM_STR);
		$stmt->bindValue(2, $nama, \PDO::PARAM_STR);
		$stmt->bindValue(3, $email, \PDO::PARAM_STR);
		$stmt->bindValue(4, $username, \PDO::PARAM_STR);
		$stmt->bindValue(5, $password, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function edit_data($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM alumni WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_STR);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}

	public function update_data($nobp, $nama, $email, $username, $id)
	{
		$stmt = $this->db->prepare("UPDATE alumni SET nobp = ?, nama = ?, email = ?, username = ? WHERE id = ?");

		$stmt->bindValue(1, $nobp, \PDO::PARAM_STR);
		$stmt->bindValue(2, $nama, \PDO::PARAM_STR);
		$stmt->bindValue(3, $email, \PDO::PARAM_STR);
		$stmt->bindValue(4, $username, \PDO::PARAM_STR);
		$stmt->bindValue(5, $id, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function lengkapi_data($tempat_lahir, $tanggal_lahir, $jenis_kelamin, $email, $telepon, $alamat, $angkatan, $bulan_lulus, $tahun_lulus, $pekerjaan, $id)
	{

		$stmt = $this->db->prepare("UPDATE alumni SET tempat_lahir = ?, tanggal_lahir = ?, jenis_kelamin = ?, email = ?, telepon = ?, alamat = ?, angkatan = ?, bulan_lulus = ?, tahun_lulus = ?, pekerjaan = ? WHERE id = ?");

		$stmt->bindValue(1, $tempat_lahir, \PDO::PARAM_STR);
		$stmt->bindValue(2, $tanggal_lahir, \PDO::PARAM_STR);
		$stmt->bindValue(3, $jenis_kelamin, \PDO::PARAM_STR);
		$stmt->bindValue(4, $email, \PDO::PARAM_STR);
		$stmt->bindValue(5, $telepon, \PDO::PARAM_STR);
		$stmt->bindValue(6, $alamat, \PDO::PARAM_STR);
		$stmt->bindValue(7, $angkatan, \PDO::PARAM_STR);
		$stmt->bindValue(8, $bulan_lulus, \PDO::PARAM_STR);
		$stmt->bindValue(9, $tahun_lulus, \PDO::PARAM_STR);
		$stmt->bindValue(10, $pekerjaan, \PDO::PARAM_STR);
		$stmt->bindValue(11, $id, \PDO::PARAM_INT);

		return $stmt->execute();
	}

	public function hapus_data($id)
	{
		$stmt = $this->db->prepare("DELETE FROM alumni WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_STR);

		return $stmt->execute();
	}

	public function data_alumni_isi_kuisioner($pilihan = '', $tahun = '')
	{

		if ($pilihan === 'angkatan') {

			if (! empty($tahun)) {
				
				$kondisi = "WHERE alumni.angkatan like '%$tahun%'";
			} else {
				$kondisi = '';
			}

		} elseif ($pilihan === 'post') {

			if (! empty($tahun)) {
				
				$kondisi = "WHERE jawaban.tgl_post like '%$tahun%'";
			} else {
				$kondisi = '';
			}

		} else {

			$kondisi = '';
		}

		$stmt = $this->db->prepare("SELECT DISTINCT alumni.id as ida, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, email, telepon, alamat, angkatan, bulan_lulus, tahun_lulus, pekerjaan, jawaban.tgl_post as publish FROM alumni INNER JOIN jawaban ON alumni.id = jawaban.id_alumni $kondisi");
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function hitung_alumni_bekerja($angkatan)
    {
        $stmt = $this->db->prepare("SELECT angkatan, COUNT(pekerjaan) as pekerjaan FROM alumni WHERE pekerjaan != '-' AND angkatan = ?");
        $stmt->bindValue(1, $angkatan, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}
	
	public function cek_angkatan_alumni()
	{
		$stmt = $this->db->prepare("SELECT DISTINCT angkatan as _angkatan FROM alumni");
		$stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function hitung_kuesioner_alumni($angkatan)
    {
        $stmt = $this->db->prepare("SELECT COUNT(angkatan) as jml_angkatan FROM alumni WHERE angkatan = ?");
        $stmt->bindValue(1, $angkatan, \PDO::PARAM_STR);
        $stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}
} 