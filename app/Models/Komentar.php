<?php
namespace app\models;

use Engine\Model;

class Komentar extends Model
{

    public function cek_komentar($id_lowongan)
    {
        $stmt = $this->db->prepare("SELECT komentar._komentar, tgl_post, alumni.nama FROM komentar JOIN alumni ON komentar.id_alumni = alumni.id WHERE komentar.id_lowongan = ? ORDER BY tgl_post DESC");
        $stmt->bindValue(1, $id_lowongan, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);

    }
    
    public function tambah_data($id_alumni, $id_lowongan, $komentar, $tgl_post)
    {
        $stmt = $this->db->prepare("INSERT INTO komentar(id_alumni, id_lowongan, _komentar, tgl_post) VALUES(?, ?, ?, ?)");
        $stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
        $stmt->bindValue(2, $id_lowongan, \PDO::PARAM_INT);
        $stmt->bindValue(3, $komentar, \PDO::PARAM_STR);
        $stmt->bindValue(4, $tgl_post, \PDO::PARAM_STR);

        return $stmt->execute();

    }

    public function hitung_komentar($id_lowongan)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) as jml_komentar FROM komentar WHERE id_lowongan = ?");
        $stmt->bindValue(1, $id_lowongan, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}