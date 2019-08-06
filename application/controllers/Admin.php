<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title']  = 'Dashboard';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer');
    }

    public function role()
    {
        $data['title']  = 'Hak Akses';
        $email          = $this->session->userdata('email');
        $data['user']   = $this->Admin_model->getUser($email);
        $data['role']   = $this->Admin_model->getRole();
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/role/index', $data);
        $this->load->view('templates/admin/footer');
        } else {
            $role = $this->input->post('role');
            $this->Admin_model->addRole($role);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
            redirect('admin/role');
        }
    }

    public function editRole()
    {
        $id = $this->input->post('id');
        $role = $this->input->post('role');
        $this->Admin_model->editRole($role, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('admin/role');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Menu Akses';
        $email          = $this->session->userdata('email');
        $data['user']   = $this->Admin_model->getUser($email);
        $data['role']   = $this->Admin_model->getRoleId($role_id);

        // $this->Admin_model->getId1(); //menyembunyikan menu admin 
        $data['menu'] = $this->Admin_model->getMenu();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/role/role-access', $data);
        $this->load->view('templates/admin/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->Admin_model->getUserAccess($data);

        if ($result->num_rows() < 1) {
            $this->Admin_model->addMenu($data);
        } else {
            $this->Admin_model->deleteMenu($data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
