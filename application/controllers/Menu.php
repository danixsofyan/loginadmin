<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
        $data['title']  = 'Pengelolaan Menu';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $data['menu']   = $this->Menu_model->getMenuAll();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $menu = $this->input->post('menu');
            $this->Menu_model->addMenu($menu);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function editMenu()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $id   = $this->input->post('id');
            $menu = $this->input->post('menu');
            $this->Menu_model->editMenu($id, $menu);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->Menu_model->deleteMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dihapus!</div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title']  = 'Pengelolaan Submenu';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $this->load->model('Menu_model', 'menu');

        $data['subMenu']= $this->menu->getSubMenu();
        $data['menu']   = $this->Menu_model->getMenuAll();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/menu/submenu', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->Menu_model->addSubMenu($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function editSubMenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/menu/submenu', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $id   = $this->input->post('id');
            $this->Menu_model->editSubMenu($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubMenu($id)
    {
        $this->Menu_model->deleteSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dihapus!</div>');
        redirect('menu/submenu');
    }
}
