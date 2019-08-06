<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	//get
	public function getMenu($role_id)
    {
        $query = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
        return $this->db->query($query)->result_array();
    }
	
    public function getSubMenuSidebar($menuId)
    {
        $query = "SELECT *
	               FROM `user_sub_menu` JOIN `user_menu` 
	                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
	              WHERE `user_sub_menu`.`menu_id` = $menuId
	                AND `user_sub_menu`.`is_active` = 1
	        ";
        return $this->db->query($query)->result_array();
    }
    public function getMenuAll()
    {
        return  $this->db->get('user_menu')->result_array();
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    //add
    public function addMenu($menu)
    {
        $this->db->insert('user_menu', ['menu' => $menu]);
    }

    public function addSubMenu($data)
    {
        $this->db->insert('user_sub_menu', $data);
    }

    //edit
    public function editMenu($id, $menu)
    {
        $this->db->where('id', $id);
        $this->db->update('user_menu', ['menu' => $menu]);
    }
    
	public function editSubMenu($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
	}

    //delete
    public function deleteMenu($id){
		$this->db->delete('user_menu', ['id' => $id]);
    }
    
	public function deleteSubMenu($id){
		$this->db->delete('user_sub_menu', ['id' => $id]);
	}
    
}