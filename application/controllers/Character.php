<?php

class Character extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Character_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List Character';
        $data['character'] = $this->Character_Model->getAllCharacter();
        
        $this->load->view('templates/header', $data);
        $this->load->view('character/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Form Add New Character';

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
            $this->load->view('character/add');
            $this->load->view('templates/footer');
        } else {
            $this->Character_Model->AddDataCharacter();
            $this->session->set_flashdata('flash', 'Add New Character');
            redirect('character');
        }
    }

    public function delete($id)
    {
        $this->Character_Model->DeleteDataCharacter($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('character');
    }

    public function detail($id)
    {
        $data['judul'] = 'Character Details';
        $data['character'] = $this->Character_Model->getCharacterById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('character/detail', $data);
        $this->load->view('templates/footer');
    }
}
