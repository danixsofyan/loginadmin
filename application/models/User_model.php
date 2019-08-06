<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    //get
    public function getAllUser(){
        $this->db->select('user.id, name, email, role, role_id, is_active, image');
        $this->db->from('user');
        $this->db->join('user_role', 'user_role.id = user.role_id');
        return $this->db->get()->result_array();
    }
    
	public function getRole(){
		return $this->db->get('user_role')->result_array();
	}

	public function getRoleId($role_id){
		return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
	}

	public function getUserAccess($data){
		return $this->db->get_where('user_access_menu', $data);
	}

	public function getId1(){
		return $this->db->where('id !=', 1);
	}
	
	public function getMenu(){
		return $this->db->get('user_menu')->result_array();
	}

	// add
    public function addUser($data, $user_token)
    {
        $this->db->insert('user', $data);
        $this->db->insert('user_token', $user_token);
    }

    public function addMenu($data){
		$this->db->insert('user_access_menu', $data);
	}

	public function addRole($role){
		$this->db->insert('user_role', ['role' => $role]);
	}

	//edit
	public function editRole($role, $id)
    {
        $this->db->set('role', $role);
		$this->db->where('id', $id);
		$this->db->update('user_role');
	}

	//delete
	public function deleteRole($id){
		$this->db->delete('user_role', ['id' => $id]);
	}

	public function deleteMenu($data){
		$this->db->delete('user_access_menu', $data);
	}
}