<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
           $this->load->helper('url'); 
    }
    public function index() {
         
        $this->load->model('ItemModel');
        $data['items'] = $this->ItemModel->LoadItems();
        $this->load->view('Home', $data);
    }
    
        public function Item() {
               
        $this->load->model('ItemModel');
        $data['items'] = $this->ItemModel->LoadItems();
        $this->load->view('Item', $data);
    }

}