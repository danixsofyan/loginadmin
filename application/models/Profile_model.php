<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	//get
	public function getUser($email){
		return $this->db->get_where('user', ['email' => $email])->row_array();
    }

    //edit
    public function setImage($new_image){
      $this->db->set('image', $new_image);
    }

    public function editUser($name, $email){
		$this->db->set('name', $name);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    public function editPassword($email, $password_hash)
    {
        $this->db->set('password', $password_hash);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');
	}

}