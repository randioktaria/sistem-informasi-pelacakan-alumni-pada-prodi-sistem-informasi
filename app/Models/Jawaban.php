<?php
namespace app\models;

use Engine\Model;

class Jawaban extends Model
{
    public function simpan_jawaban($id_alumni, $id_pertanyaan, $jawaban, $time)
    {
        $stmt = $this->db->prepare("INSERT INTO jawaban(id_alumni, id_pertanyaan, _jawaban, tgl_post) VALUES(?, ?, ?, ?)");
        $stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
        $stmt->bindValue(2, $id_pertanyaan, \PDO::PARAM_STR);
        $stmt->bindValue(3, $jawaban, \PDO::PARAM_STR);
        $stmt->bindValue(4, $time, \PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update_waktu_jawab($id_alumni, $waktu)
    {
        $stmt = $this->db->prepare("UPDATE jawaban SET tgl_post = ? WHERE id_alumni = ?");
        $stmt->bindValue(1, $waktu, \PDO::PARAM_STR);
        $stmt->bindValue(2, $id_alumni, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function ambil_semua_berdasarkan_id_alumni($id_alumni)
    {
        $stmt = $this->db->prepare("SELECT * FROM jawaban WHERE id_alumni = ?");
        $stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function hitung_id_alumni()
    {
        $stmt = $this->db->prepare("SELECT COUNT(DISTINCT id_alumni) as id_alumni FROM jawaban");
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function ambil_jawaban_berdasarkan_id_pertanyaan($id_pertanyaan, $id_alumni)
    {
        $stmt = $this->db->prepare("SELECT _jawaban FROM jawaban WHERE id_pertanyaan = ? AND id_alumni = ?");
        $stmt->bindValue(1, $id_pertanyaan, \PDO::PARAM_STR);
        $stmt->bindValue(2, $id_alumni, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

}