<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4" role="alert">Menu Telah Ditambahkan </div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $data = [
            'id' => $id
        ];
        $this->load->model('Menu_model');
        $this->Menu_model->delete($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 col" role="alert">Menu Telah Dihapus </div>');
        redirect('menu');
    }

    public function edit()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $menu = $this->input->post('menu');
            $data = array(
                'id' => $id,
                'menu' => $menu
            );
            $this->db->where('id', $id);
            $this->db->update('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4" role="alert">Menu Telah Diubah </div>');
            redirect('menu');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger ml-4" role="alert">Gagal!</div>');
            redirect('menu');
        }
    }

    public function subMenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4" role="alert">Submenu Telah Ditambahkan </div>');
            redirect('menu/submenu ');
        }
    }

    public function subMenuEdit()
    {
        // $this->load->model('Menu_model', 'menu');
        // $data['subMenu'] = $this->menu->getSubMenu();
        // $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger ml-4" role="alert">Gagal!</div>');
            redirect('menu/submenu');
        } else {
            $id = $this->input->post('id');
            $submenu = $this->input->post('menu_id');
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $is_active = $this->input->post('is_active');
            $data = array(
                'id' => $id,
                'menu_id' => $submenu,
                'title' => $title,
                'url' => $url,
                'icon' => $icon,
                'is_active' => $is_active
            );
            $this->db->where('id', $id);
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 col" role="alert">Menu Telah Diubah </div>');
            redirect('menu/submenu');
        }
    }

    public function deletesubMenu($id)
    {
        $data = [
            'id' => $id
        ];
        $this->load->model('Menu_model');
        $this->Menu_model->deleteSub($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 col" role="alert">Menu Telah Dihapus </div>');
        redirect('menu/submenu');
    }
}