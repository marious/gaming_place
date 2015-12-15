<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	/**
	 * Register 
	 */
	public function register()
	{
		// Validation rules 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|is_unique[users.first_name]|max_length[20]|min_length[2]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[20]|min_length[2]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[2]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[20]|min_length[6]');
		$this->form_validation->set_rules('password2', 'Confirmation Password', 'trim|required|matches[password]');
				
		
		if ( $this->form_validation->run() == false ) {
			
			// load view
			$data['main_content'] = 'user/register';
			$this->load->view('_template/main', $data);
			
		} else {
			
			if ( $this->User_model->register() ) {
				$this->session->set_flashdata('registered', 'you are now registered and can now login');
				redirect('products');
			}
		}
	}
	
	/**
	 * login
	 */
	public function login() 
	{
		// Validation rules 
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		$username = $this->input->post('username');
		$password = md5($this->input->post('username') . $this->input->post('password'));
		
		$user_id = $this->User_model->login($username, $password);
		
		if ( $user_id ) {
			// Create array of user data 
			$data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
			);
			
			// set session user data 
			$this->session->set_userdata($data);
			
			// Set flash data 
			$this->session->set_flashdata('pass_login', 'You are logged in');
			
			redirect('products');
			
			
		} else {
			$this->session->set_flashdata('fail_login', 'Sorry, the login info is incorrect');
			redirect('products');
		}
	
	}
	
	
	/***
	 * logou 
	 */
	
	public function logout() 
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_id');
		
		$this->session->sess_destroy();
		redirect('products');

	}
	
}



