<?php

class Weapon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Weapon_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List Weapon';
        $data['weapon'] = $this->Weapon_Model->getAllWeapon();
        
        $this->load->view('templates/header', $data);
        $this->load->view('weapon/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Form Add New weapon';

        $this->form_validation->set_rules('name_char', 'Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('star', 'Star');
        $this->form_validation->set_rules('organization', 'Organization', 'required');
        $this->form_validation->set_rules('origin', 'Origin');
        $this->form_validation->set_rules('constellation', 'Constellation', 'required');
        $this->form_validation->set_rules('element', 'Element');
        $this->form_validation->set_rules('weapon', 'Weapon');
        $this->form_validation->set_rules('vo_japanese', 'Voice Over Japanese', 'required');
        $this->form_validation->set_rules('vo_chinese', 'Voice Over Chinese', 'required');
        $this->form_validation->set_rules('vo_english', 'Voice Over English', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('weapon/add');
            $this->load->view('templates/footer');
        } else {
            $this->Weapon_Model->AddDataWeapon();
            $this->session->set_flashdata('flash', 'Add New weapon');
            redirect('weapon');
        }
    }

    public function delete($id)
    {
        $this->Weapon_Model->DeleteDataWeapon($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('weapon');
    }

    public function detail($id)
    {
        $data['judul'] = 'Weapon Details';
        $data['weapon'] = $this->Weapon_Model->getWeaponById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('weapon/detail', $data);
        $this->load->view('templates/footer');
    }
}
