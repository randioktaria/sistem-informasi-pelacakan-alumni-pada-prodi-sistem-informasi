<?php
namespace app\models;

use Engine\Model;

class Pertanyaan extends Model
{

    public function all()
    {
        $stmt = $this->db->prepare("SELECT pertanyaan.id, kuisioner.id as ks_id, _pertanyaan, pilihan, _kuisioner FROM pertanyaan INNER JOIN kuisioner ON pertanyaan.id_kuisioner = kuisioner.id ORDER BY pertanyaan.id");	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getKuisioner()
    {
        $stmt = $this->db->prepare("SELECT id, _kuisioner FROM kuisioner");	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function insert($id, $id_kuisioner, $pertanyaan, $pilihan, $time)
    {
        $stmt = $this->db->prepare("INSERT into pertanyaan(id, id_kuisioner, _pertanyaan, pilihan, tgl_post) VALUES(?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);
        $stmt->bindValue(2, $id_kuisioner, \PDO::PARAM_STR);
        $stmt->bindValue(3, $pertanyaan, \PDO::PARAM_STR);
        $stmt->bindValue(4, $pilihan, \PDO::PARAM_STR);
        $stmt->bindValue(5, $time, \PDO::PARAM_STR);


        return $stmt->execute();
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT pertanyaan.id, kuisioner.id as ks_id, _pertanyaan, pilihan, _kuisioner FROM pertanyaan INNER JOIN kuisioner ON pertanyaan.id_kuisioner = kuisioner.id WHERE pertanyaan.id = ?");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function update($id, $pertanyaan, $pilihan, $time, $id_)
    {
        $stmt = $this->db->prepare("UPDATE pertanyaan SET id = ?, _pertanyaan = ?, pilihan = ?, tgl_post = ? WHERE pertanyaan.id = ?");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);
        $stmt->bindValue(2, $pertanyaan, \PDO::PARAM_STR);
        $stmt->bindValue(3, $pilihan, \PDO::PARAM_STR);
        $stmt->bindValue(4, $time, \PDO::PARAM_STR);
        $stmt->bindValue(5, $id_, \PDO::PARAM_STR);
        return $stmt->execute();

    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM pertanyaan WHERE id = ?");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function ambil_pertanyaan_berdasarkan_id_kuisioner($id_alumni, $id_kuisioner, $key = null)
    {
        $stmt = $this->db->prepare("SELECT pertanyaan.id, _pertanyaan, pilihan, _jawaban, kuisioner.id as ks_id, _kuisioner FROM pertanyaan LEFT JOIN jawaban ON jawaban.id_pertanyaan = pertanyaan.id AND jawaban.id_alumni = ? INNER JOIN kuisioner ON kuisioner.id = pertanyaan.id_kuisioner WHERE kuisioner.id = ? ORDER BY pertanyaan.id asc");
        $stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
        $stmt->bindValue(2, $id_kuisioner, \PDO::PARAM_STR);		
		$stmt->execute();
        
        if ($key === true) {
            return $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }  
    }

    public function ambil_pertanyaan_dan_jawaban($id_alumni, $id_kuisioner)
    {
        $stmt = $this->db->prepare("SELECT pertanyaan.id, _pertanyaan, _jawaban, kuisioner.id as ks_id, _kuisioner FROM pertanyaan INNER JOIN jawaban ON jawaban.id_pertanyaan = pertanyaan.id AND jawaban.id_alumni = ? INNER JOIN kuisioner ON kuisioner.id = pertanyaan.id_kuisioner WHERE kuisioner.id = ?");
        $stmt->bindValue(1, $id_alumni, \PDO::PARAM_INT);
        $stmt->bindValue(2, $id_kuisioner, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}