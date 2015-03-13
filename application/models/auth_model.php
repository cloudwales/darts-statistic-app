<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			redirect('login');
		}
	}

	public function validate($username, $password)
	{
		$sha_password = sha1($password);
	    $this->db->where('username', $username);
	    $this->db->where('password', $sha_password);
		$query = $this->db->get('users');

		if($query->num_rows == 1){
			return true;
		}else{
			return false;
		}
	}	


	public function get_user_details($username)
	{	
	   	$query = $this->db->get_where('users', array('username' => $username));
		return $query->row_array();
	}
	


}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */