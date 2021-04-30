<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function create_user()
    {
        $data = array(
            'lastname'=> $this->input->post('lastname'),
            'firstname'=> $this->input->post('firstname'),
            'mail'=> $this->input->post('mail'),
            'password'=> password_hash($this->input->post('password'), PASSWORD_BCRYPT)
        );
        return $this->db->insert('mugab_users', $data);
    }
    public function getUsersList()
    {
        $data = $this->db->get('mugab_users');
        return $data;
    }
    public function getUserById($id){
        $data = $this->db->get_where('mugab_users', array('id' => $id))->first_row();
        return $data;
    }

    public function updateUser(){
        $data = array(
            'lastname' => $this->db->get('lastname'),
            'firstname'  => $this->db->get('firstname'),
            'mail'  => $this->db->get('mail'),
            'password'  => $this->db->get('password')
    );
    
    $this->db->replace('table', $data);
    }
}