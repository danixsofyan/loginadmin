<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	//get
	public function getUser($email){
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function getToken($token){
		return $this->db->get_where('user_token', ['token' => $token])->row_array();
	}

	// add
    public function addUser($data, $user_token)
    {
        $this->db->insert('user', $data);
        $this->db->insert('user_token', $user_token);
    }

	public function addToken($user_token)
    {
        $this->db->insert('user_token', $user_token);
	}
	
	//edit
	public function editUser($user_token)
    {
        $this->db->set('is_active', 1);
		$this->db->where('email', $email);
		$this->db->update('user');
	}

	public function editPassword($email, $password)
    {
        $this->db->set('password', $password);
		$this->db->where('email', $email);
		$this->db->update('user');
	}

	//delete
	public function deleteUser($email){
		$this->db->delete('user', ['email' => $email]);
	}
	
	public function deleteToken($email){
		$this->db->delete('user_token', ['email' => $email]);
	}
	
}