<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Startup_model extends CI_Model
{

    //get startup
	public function getStartup($id){
		return $this->db->get_where('socioide', ['id_socio' => $id])->row_array();
    }
    
    //add startup
    public function addStartup($data)
    {
        $this->db->insert('socioide', $data);
    }

    //add product
    public function addProduk($data)
    {
        $this->db->insert('product', $data);
    }

    //edit startup
    public function editStartup($id, $data)
    {
        $this->db->where('id_socio', $id);
        $this->db->update('socioide', $data);
    }

    //edit product
    public function editProduk($idproduk, $data)
    {
        $this->db->where('id', $idproduk);
        $this->db->update('product', $data);
    }

    //edit
    public function setImage($new_image){
        $this->db->set('image', $new_image);
    }
}