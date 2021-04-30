<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MainController extends CI_Controller{
    public function view($page = 'accueil'){
        $viewTab = [
            'accueil' => [
                'title' => 'Accueil',
                'view' => 'accueil'
            ]
        ];

        $data["title"] = $viewTab[$page]['title'];
        $this->load->view('common/header', $data);

        $this->load->view('main/' . $viewTab[$page]['view'], $data);
        
        $this->load->view('common/footer');
    }
}