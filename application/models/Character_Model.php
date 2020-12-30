<?php
use GuzzleHttp\Client;

class Character_Model extends CI_model
{
    private $_client;
    
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/Genshin_Impact_RESTServer/server/api/',
            'auth' => ['rzii', 'rahasia3']
        ]);
    }

    public function getAllCharacter()
    {

        $response = $this->_client->request('GET', 'character', [
            'query' => [
                'acc-token' => 'Gdb02'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'];
    }

    public function getCharacterById($id)
    {
         $response = $this->_client->request('GET', 'character', [
            'query' => [
                'acc-token' => 'Gdb02',
                'id_char' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        
        return $result['data'][0];
    }

    public function AddDataCharacter()
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

        $response = $this->_client->request('POST', 'character', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function DeleteDataCharacter($id)
    {
        $response = $this->_client->request('DELETE', 'character', [
            'form_params' => [
                'id_char' => $id,
                'acc-token' => 'Gdb02'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}