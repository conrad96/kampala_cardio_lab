<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function index(){
        $data['page'] = 'Home';
        $this->load->view("index", $data);
    }
}