<?php
use GuzzleHttp\Client;

class Weapon_Model extends CI_model
{
    private $_client;
    
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/Genshin_Impact_RESTServer/server/api/',
            'auth' => ['rzii', 'rahasia3']
        ]);
    }

    public function getAllWeapon()
    {

        $response = $this->_client->request('GET', 'weapon', [
            'query' => [
                'acc-token' => 'Gdb02'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'];
    }

    public function getWeaponById($id)
    {
         $response = $this->_client->request('GET', 'weapon', [
            'query' => [
                'acc-token' => 'Gdb02',
                'id_wp' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'][0];
    }

    public function AddDataWeapon()
    {
        $data = [
            "name_char" => $this->input->post('name_char', true),
            "gender" => $this->input->post('gender', true),
            "star" => $this->input->post('star', true),
            "organization" => $this->input->post('organization', true),
            "origin" => $this->input->post('origin', true),
            "constellation" => $this->input->post('constellation', true),
            "element" => $this->input->post('element', true),
            "weapon" => $this->input->post('weapon', true),
            "vo_japanese" => $this->input->post('vo_japanese', true),
            "vo_chinese" => $this->input->post('vo_chinese', true),
            "vo_english" => $this->input->post('vo_english', true),
            'acc-token' => 'Gdb02'
        ];

        $response = $this->_client->request('POST', 'weapon', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function DeleteDataCharacter($id)
    {
        $response = $this->_client->request('DELETE', 'weapon', [
            'form_params' => [
                'id_weapon' => $id,
                'acc-token' => 'Gdb02'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}