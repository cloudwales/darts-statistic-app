<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_options()
	{
		$query = $this->db->get('options');
		return $query->row();	
	}

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result_array();	
	}

	public function save_user($data)
	{
		$this->db->insert('users', $data); 	
	}
	

	public function delete_user($id)
	{
		$this->db->delete('users', array('id' => $id));
	}
	
	

}

/* End of file welcome_model.php */
/* Location: ./application/models/welcome_model.php */