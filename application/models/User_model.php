<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model
{
	
	public function register() 
	{
		$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('username') . $this->input->post('password') ),
				
		);
		
		$insert = $this->db->insert('users', $data);
		
		return $insert;
	}
	
	
	/*
	 * login 
	 */
	
	public function login($username, $password) 
	{
		$result = $this->db->get_where('users', array(
				'username' => $username,
				'password' => $password
		));
		
		if ( $result->num_rows() === 1 ) {
			
			return $result->row(0)->id;
			
		} else {
			return false;
		}
		
	}
		
}
