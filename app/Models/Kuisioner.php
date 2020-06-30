<?php
namespace app\models;

use Engine\Model;

class Kuisioner extends Model
{

    public function all()
    {
        $stmt = $this->db->prepare("SELECT * FROM kuisioner");	
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function insert($id, $kuisioner, $time)
    {
        $stmt = $this->db->prepare("INSERT INTO kuisioner(id, _kuisioner, created_at) VALUES(?, ?, ?)");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);
        $stmt->bindValue(2, $kuisioner, \PDO::PARAM_STR);
        $stmt->bindValue(3, $time, \PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM kuisioner WHERE id = ?");
		$stmt->bindValue(1, $id, \PDO::PARAM_STR);	
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_OBJ);;
    }

    public function update($id_, $kuisioner, $time, $id)
    {
        $stmt = $this->db->prepare("UPDATE kuisioner SET id = ?, _kuisioner = ?, updated_at = ? WHERE id = ?");
        $stmt->bindValue(1, $id_, \PDO::PARAM_STR);
        $stmt->bindValue(2, $kuisioner, \PDO::PARAM_STR);
        $stmt->bindValue(3, $time, \PDO::PARAM_STR);
        $stmt->bindValue(4, $id, \PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM kuisioner WHERE id = ?");
        $stmt->bindValue(1, $id, \PDO::PARAM_STR);
        return $stmt->execute();
    }

}