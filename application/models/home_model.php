<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_options()
	{
		$query = $this->db->get('options');
		return $query->row();	
	}

	public function get_stats()
	{
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('matches');
		return $query->result_array();	
	}

	public function get_wins()
	{
		$this->db->order_by('matches_won', 'desc');
		$query = $this->db->get('matches');
		return $query->result_array();	
	}

	public function get_tons()
	{
		$this->db->order_by('tons', 'desc');
		$query = $this->db->get('matches');
		return $query->result_array();	
	}

	public function get_one_eighties()
	{
		$this->db->order_by('one_eighty', 'desc');
		$query = $this->db->get('matches');
		return $query->result_array();	
	}

	public function get_profile($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('matches');
		return $query->row_array();	
	}

	public function save_player()
	{
		$data = $this->input->post();
		$this->db->insert('matches', $data); 	
	}

	public function update_player($id)
	{
		$data = array(
			'played' => $this->input->post('played'),
			'matches_won' => $this->input->post('matches_won'),
			'legs_won' => $this->input->post('legs_won'),
			'tons' => $this->input->post('tons'),
			'one_eighty' => $this->input->post('one_eighty'),
		);
		$this->db->where('id', $id);
		$this->db->update('matches', $data); 
	}


	public function delete($id)
	{
		$this->db->delete('matches', array('id' => $id));
	}
	

	// ----------------------------------------------------------------

	public function add_played($id)
	{
		$this->db->set('played', 'played+1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function subtract_played($id)
	{
		$this->db->set('played', 'played-1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function add_match($id)
	{
		$this->db->set('matches_won', 'matches_won+1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function subtract_match($id)
	{
		$this->db->set('matches_won', 'matches_won-1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}

	// ----------------------------------------------------------------

	public function add_leg($id)
	{
		$this->db->set('legs_won', 'legs_won+1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function subtract_leg($id)
	{
		$this->db->set('legs_won', 'legs_won-1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}

	// ----------------------------------------------------------------

	public function add_ton($id)
	{
		$this->db->set('tons', 'tons+1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function subtract_ton($id)
	{
		$this->db->set('tons', 'tons-1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}

	// ----------------------------------------------------------------

	public function add_one_eighty($id)
	{
		$this->db->set('one_eighty', 'one_eighty+1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}
	
	// ----------------------------------------------------------------

	public function subtract_one_eighty($id)
	{
		$this->db->set('one_eighty', 'one_eighty-1',FALSE);
		$this->db->where('id', $id); // '1' test value here ?
		$this->db->update('matches');  
	}

	// ----------------------------------------------------------------

	public function reset()
	{
		$this->db->empty_table('matches');
	}
	

}

/* End of file welcome_model.php */
/* Location: ./application/models/welcome_model.php */