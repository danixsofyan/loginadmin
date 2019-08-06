<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title']  = 'Daftar Pengguna';
            $email          = $this->session->userdata('email');        
            $data['user']   = $this->Admin_model->getUser($email);
            $data['alluser']= $this->User_model->getAllUser();
            $data['role']   = $this->User_model->getRole();

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/user/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $email      = $this->input->post('email', true);
            $is_active  = $this->input->post('is_active', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => htmlspecialchars($is_active),
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->Auth_model->addUser($data, $user_token);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna baru berhasil dibuat!</div>');
            redirect('user');
        }
    }

    public function editUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title']  = 'Daftar Pengguna';
            $email          = $this->session->userdata('email');        
            $data['user']   = $this->Admin_model->getUser($email);
            $data['alluser']= $this->User_model->getAllUser();
            $data['role']   = $this->User_model->getRole();

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/user/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $id         = $this->input->post('id', true);
            $email      = $this->input->post('email', true);
            $is_active  = $this->input->post('is_active', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => htmlspecialchars($this->input->post('image', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => htmlspecialchars($is_active),
                'date_created' => time()
            ];

            $this->Auth_model->editPengguna($id, $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil diubah!</div>');
            redirect('user');
        }
    }

    public function aktifUser($id)
    {
        $this->Auth_model->aktif($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Diaktifkan!</div>');
        redirect('user');
    }

    public function nonaktifUser($id)
    {
        $this->Auth_model->nonaktif($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Dinonaktifkan!</div>');
        redirect('user');
    }
    public function role()
    {
        $data['title']  = 'Hak Akses';
        $email          = $this->session->userdata('email');
        $data['user']   = $this->Admin_model->getUser($email);
        $data['role']   = $this->User_model->getRole();
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/role/index', $data);
        $this->load->view('templates/admin/footer');
        } else {
            $role = $this->input->post('role');
            $this->User_model->addRole($role);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
            redirect('user/role');
        }
    }

    public function editRole()
    {
        $id = $this->input->post('id');
        $role = $this->input->post('role');
        $this->User_model->editRole($role, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('user/role');
    }

    public function deleteRole($id)
    {
        $this->User_model->deleteRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dihapus!</div>');
        redirect('user/role');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Menu Akses';
        $email          = $this->session->userdata('email');
        $data['user']   = $this->Admin_model->getUser($email);
        $data['role']   = $this->User_model->getRoleId($role_id);

        // $this->User_model->getId1(); //menyembunyikan menu admin 
        $data['menu'] = $this->User_model->getMenu();

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

        $result = $this->User_model->getUserAccess($data);

        if ($result->num_rows() < 1) {
            $this->User_model->addMenu($data);
        } else {
            $this->User_model->deleteMenu($data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
