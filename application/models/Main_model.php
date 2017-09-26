<?php 

class Main_model extends CI_Model {


public function __construct() {
				parent::__construct();
			}
public function insert($data) {

	$result = $this->db->insert('inquires', $data);
	return $result;
}

}