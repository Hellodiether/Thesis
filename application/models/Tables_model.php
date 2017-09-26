<?php

class Tables_model extends CI_Model {
	
	public function getInquiry($table){
	return $this->db->get($table)->result();
}

}
