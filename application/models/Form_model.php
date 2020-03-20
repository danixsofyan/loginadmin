<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
	//get data pribadi
	public function getDataPribadi($email){
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	// Count Founder
	public function countFounder($idstartup)
    {
        return $this->db->query("SELECT count(id) as jumlahfounder FROM t_founder WHERE startup_id = $idstartup")->row_array();
	}

	//get produk
	public function getProduk($idstartup){
		return $this->db->get_where('product', ['id_startup' => $idstartup])->row_array();
	}

	//get kategori
	public function getKategori(){
		return $this->db->get('bidang_usaha')->result_array();
	}

	//get kategori terpilih
	public function getSelectKategori($idstartup){        
		return $this->db->query("SELECT * FROM product JOIN socioide ON product.id_startup = socioide.id_socioide WHERE socioide.id_socioide = $idstartup")->result_array();
	}

	//get proposal
	public function getProposal($idstartup){
		return $this->db->get_where('proposal', ['idstartup' => $idstartup])->row_array();
	}
	
	public function getKota($n, $id)
    {
        return $this->db->query("SELECT * FROM wilayah WHERE LEFT(kode,:$n)=:$id AND CHAR_LENGTH(kode)=:m ORDER BY nama")->result_array();
	}

	//get founder
	public function getFounderAll($idstartup){
		return $this->db->get_where('t_founder', ['startup_id' => $idstartup])->result_array();
    }

	//get founder
	public function getFounder($idstartup){
		return $this->db->get_where('t_founder', ['startup_id' => $idstartup])->row_array();
    }
	
	//add proposal
    public function addProposal($data)
    {
        $this->db->insert('proposal', $data);
	}

	//add Founder
    public function addFounder($data)
    {
        $this->db->insert('t_founder', $data);
	}

	//edit
	public function editUser($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
	}

	//edit
	public function editFounder($idfounder, $data)
    {
        $this->db->where('id', $idfounder);
        $this->db->update('t_founder', $data);
	}




	//get proposal
	public function getPro($idstartup){
		return $this->db->get_where('proposal', ['idstartup' => $idstartup])->row_array();
	}

	//set
    public function setPitchDeck($new_pitchdeck){
        $this->db->set('pitchdeck', $new_pitchdeck);
	}
	
	//set
    public function setMockup($new_mockup){
        $this->db->set('mockup', $new_mockup);
	}
	
	//set
    public function setIPetaKompetisi($new_petakompetisi){
        $this->db->set('petakompetisi', $new_petakompetisi);
	}
	
	//set
    public function setDataPendukung($new_datapendukung){
        $this->db->set('datapendukung', $new_datapendukung);
	}

	//set
    public function setAvaFounder($new_avafounder){
        $this->db->set('image', $new_avafounder);
	}
	
	//edit proposal
    public function editPro($idstartuppost, $data)
    {
        $this->db->where('idstartup', $idstartuppost);
        $this->db->update('proposal', $data);
	}
	
	//edit proposal
    public function editVideo($idstartuppost, $new_video)
    {
		$this->db->where('id_socioide', $idstartuppost);
        $this->db->update('socioide', $new_video);
    }
}