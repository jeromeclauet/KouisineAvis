<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsersController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }

    public function createUser(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data["title"] = 'Inscription';
        $this->load->view('common/header', $data);
        if ($this->form_validation->run() === FALSE ){
            $this->load->view('users/register_fail', $data);
            $this->load->view('users/register', $data);
        }
        else{
            $this->User->create_user();
            $this->load->view('users/register_success', $data);
        }
        $this->load->view('common/footer');
    }

    public function displayUserList(){
        $data["title"] = 'Liste des clients fidèles';
        $data["userList"] = $this->User->getUsersList();
        $this->load->view('common/header', $data);
        $this->load->view('users/users_list', $data);
        $this->load->view('common/footer');
    }

    public function displayRegisterForm(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data["title"] = 'Inscription';
        $this->load->view('common/header', $data);
        $this->load->view('users/register', $data);      
        $this->load->view('common/footer');
    }
    
    public function showUserById($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data["title"] = 'Mis à jour du client';
        $data["userInfo"] = $this->User->getUserById($id);
        $this->load->view('common/header', $data);
        $this->load->view('users/update_users', $data);
        $this->load->view('common/footer');
    }
    // public function updateUser(){
    //     $this->load->helper('form');
    //     $this->load->library('form_validation');
    //     $data["title"] = 'modifier';
    //     $this->load->view('common/header', $data);
    //     $this->load->view('users/update_users', $data);      
    //     $this->load->view('common/footer');
    // }
}