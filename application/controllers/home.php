<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('auth_model', 'home_model'));
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
			$this->home_model->save();
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
			$this->home_model->update($id);
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
	// ADMIN AREA
	// ----------------------------------------------

	public function master_reset()
	{
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Reset!!</div>');
		$this->home_model->reset();
		redirect('', 'refresh');
	}

	// ----------------------------------------------

	public function new_user()
	{
		//Get Cracking
	}
	

}






/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */