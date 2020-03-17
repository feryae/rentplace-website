<?php

class model_general extends CI_Model
{
	public function get_homepageRec(){
		$this->load->database();
	    $this->db->order_by('rand()');
    	$this->db->limit(8);
    	$query = $this->db->get('list_kost');
    	return $query->result_array();
	}
	public function check_login($username,$password){
		$this->load->database();
		$query = $this->db->get_where('user', array('username' => $username,'password' => $password))->num_rows();
		return $query;
	}
	public function get_dataByUser($username){
		$this->load->database();
		$query = $this->db->get_where('user', array('username' => $username))->row_array();
		return $query;
	}
	public function insertUser($data){
		$this->load->database();
		$this->db->insert('user',$data);
	}

	public function searchdata($name){
		$this->load->database();
		$this->db->like('nama_kos',$name);
		$query = $this->db->get('list_kost')->result_array();
		return $query;
	}
	public function get_dataByID($id)
	{
		$this->load->database();
		$query = $this->db->get_where('list_kost', array('id' => $id))->row_array();
		return $query;
	}
}
?>
