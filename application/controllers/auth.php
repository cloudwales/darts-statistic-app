<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('auth_model', 'home_model'));
	}


	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			redirect('auth/login');
		}
	}
	

	public function login()
	{
		$data['options'] = $this->home_model->get_options();
		$this->load->view('includes/login_header',$data);
		$this->load->view('login');
		$this->load->view('includes/footer');
	}


	public function validate_login()
	{
		$username = $this->input->post('username');
      	$password = $this->input->post('password');
		$query = $this->auth_model->validate($username, $password); 

		if ($query == FALSE)
		{			
			$this->session->set_flashdata('message', '<br/><p class="alert alert-danger">Login Failed !!!</p>');
			redirect('login', 'refresh');
		}
		elseif($query == TRUE)
		{	
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data);

			$username = $this->session->userdata('username');
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">You are now logged in as <strong>' . $username . '</strong>!!</div>');
			redirect('');
		}	
	}

	public function logout()
	{
		$this->session->sess_destroy();
	    redirect(base_url(''), 'refresh');
	}	

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */