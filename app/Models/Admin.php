<?php
namespace app\models;

use Engine\Model;

class Admin extends Model
{
	
	public function login($username, $password)
	{
		$stmt = $this->db->prepare("SELECT username, password FROM admin WHERE username = ? AND password = ? ");
		$stmt->bindValue(1, $username, \PDO::PARAM_STR);
		$stmt->bindValue(2, $password, \PDO::PARAM_STR);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function get_name($username)
	{
		$stmt = $this->db->prepare("SELECT nama FROM admin WHERE username = ?");
		$stmt->bindValue(1, $username, \PDO::PARAM_STR);
		$stmt->execute();

		$result = $stmt->fetch(\PDO::FETCH_OBJ);
		return $result;
	}
}