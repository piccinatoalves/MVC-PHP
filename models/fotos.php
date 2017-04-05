<?php
class fotos extends model {

	public function __contruct(){
		parent::__contruct(); // roda  2 contrutores no mesmo model

	}

	public function getFotos(){
		array();

		$sql = "SELECT * FROM fotos";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

}