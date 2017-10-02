<?php 

class Main_model extends CI_Model {


public function __construct() {
				parent::__construct();
			}
public function insert($table, $data) {

	$query = $this->db->insert($table, $data);
	return $query;
}
public function getInquiry($table) {

	$query = $this->db->get($table);
	return $query;
}
}