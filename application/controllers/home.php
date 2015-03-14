<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('auth_model', 'home_model','user_model'));
	}

	// ----------------------------------------------
	// MAIN CONTROLLER
	// ----------------------------------------------

	public function index()
	{	
		$data['options'] = $this->home_model->get_options();
		$data['stats'] = $this->home_model->get_stats();
		$data['wins'] = $this->home_model->get_wins();
		$data['tons'] = $this->home_model->get_tons();
		$data['one_eighties'] = $this->home_model->get_one_eighties();

		$this->load->view('includes/header', $data);		
		$this->load->view('home', $data);
		$this->load->view('includes/footer');
	}


	// ----------------------------------------------
	// PLAYER FUNCTIONS 
	// ----------------------------------------------


	public function players()
	{
		//Get Cracking
	}
	

	public function new_player()
	{	
		$data['options'] = $this->home_model->get_options();
		$this->auth_model->is_logged_in();
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/header', $data);		
			$this->load->view('new_player',$data);
			$this->load->view('includes/footer');
		}
		else
		{
			$this->home_model->save_player();
			redirect('', 'refresh');
		}
	}

	// ----------------------------------------------

	public function edit_player()
	{	
		$data['options'] = $this->home_model->get_options();
		$this->auth_model->is_logged_in();
		$this->form_validation->set_rules('played', 'Played', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');

		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->uri->segment(2);
			$data['profile'] = $this->home_model->get_profile($id);

			$this->load->view('includes/header',$data);		
			$this->load->view('edit', $data);
			$this->load->view('includes/footer');
		}
		else
		{
			$id = $this->uri->segment(2);
			$this->home_model->update_player($id);
			redirect('', 'refresh');
		}
	}

	// ----------------------------------------------

	public function delete_player()
	{
		$this->auth_model->is_logged_in();
		$id = $this->uri->segment(2);
		$this->home_model->delete($id);
		redirect('', 'refresh');
	}
	

	// ----------------------------------------------
	// PLUS MINUS FUNCTIONS 
	// ----------------------------------------------

	public function add_played()
	{
		$id = $this->uri->segment(2);
		$this->home_model->add_played($id);
		redirect('', 'refresh');
	}
	

	public function subtract_played()
	{
		$id = $this->uri->segment(2);
		$this->home_model->subtract_played($id);
		redirect('', 'refresh');
	}

	// ----------------------------------------------

	public function add_match()
	{
		$id = $this->uri->segment(2);
		$this->home_model->add_match($id);
		redirect('', 'refresh');
	}
	
	public function subtract_match()
	{
		$id = $this->uri->segment(2);
		$this->home_model->subtract_match($id);
		redirect('', 'refresh');
	}
	
	// ----------------------------------------------

	public function add_leg()
	{
		$id = $this->uri->segment(2);
		$this->home_model->add_leg($id);
		redirect('', 'refresh');
	}
	
	public function subtract_leg()
	{
		$id = $this->uri->segment(2);
		$this->home_model->subtract_leg($id);
		redirect('', 'refresh');
	}
	
	// ----------------------------------------------

	public function add_ton()
	{
		$id = $this->uri->segment(2);
		$this->home_model->add_ton($id);
		redirect('', 'refresh');
	}
	
	public function subtract_ton()
	{
		$id = $this->uri->segment(2);
		$this->home_model->subtract_ton($id);
		redirect('', 'refresh');
	}
	
	// ----------------------------------------------

	public function add_one_eighty()
	{
		$id = $this->uri->segment(2);
		$this->home_model->add_one_eighty($id);
		redirect('', 'refresh');
	}
	
	public function subtract_one_eighty()
	{
		$id = $this->uri->segment(2);
		$this->home_model->subtract_one_eighty($id);
		redirect('', 'refresh');
	}
	


	// ----------------------------------------------
	// ADMIN FUNCTIONS
	// ----------------------------------------------

	public function master_reset()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Reset!!</div>');
		$this->home_model->reset();
		redirect('', 'refresh');
	}

	// ----------------------------------------------


	public function users()
	{
		$this->auth_model->is_logged_in();
		$data['options'] = $this->home_model->get_options();
		$data['users'] = $this->user_model->get_users();

		$this->load->view('includes/header', $data);		
		$this->load->view('users', $data);
		$this->load->view('includes/footer');
	}
	

	// ----------------------------------------------

	public function new_user()
	{
		// Call Libraries
		$this->load->library('encrypt');

		// Check settings and authentication
		$data['options'] = $this->home_model->get_options();
		$this->auth_model->is_logged_in();

		// Validation Rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'is_unique[users.username]|trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]|trim|valid_email|min_length[3]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]|xss_clean');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]|trim|min_length[3]|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger"><small>', '</small></span>');

		
		if ($this->form_validation->run() == FALSE)
		{
			// Load form if validation fails or when arriving at page
			$this->load->view('includes/header', $data);		
			$this->load->view('new_user',$data);
			$this->load->view('includes/footer');
		}
		else
		{
			// Grab the password input and encrypt
			$password = $this->input->post('password');
			$encrypted_password = $this->encrypt->sha1($password);

			// Grab the rest of the form data and prepare for the database
			$data = array(
			   'name' => $this->input->post('name'),
			   'username' => $this->input->post('username'),
			   'email' => $this->input->post('email'),
			   'password' => $encrypted_password
			);

			// Save to the database and set success message then redirect to the users page
			$this->user_model->save_user($data);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">User Created!!</div>');
			redirect('users', 'refresh');
		}
	}
	
	// ----------------------------------------------


	public function edit_user()
	{
		//Get Cracking
	}
	

	// ----------------------------------------------

	public function delete_user()
	{
		$this->auth_model->is_logged_in();

		$id = $this->uri->segment(2);
		$this->user_model->delete_user($id);
		$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">User Deleted!!</div>');
		redirect('users', 'refresh');
	}
	

}






/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */