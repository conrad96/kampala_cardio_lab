<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function index(){
        $data['page'] = 'Home';
        $this->load->view("index", $data);
    }
    function about(){
		$data['page'] = 'About';
		$this->load->view("about", $data);
	}
	function services(){
		$this->load->view("services");
	}
	function contact(){
        $this->load->view("contact");
	}
	function appointment(){
		$this->load->view("appointment_form");
	}	
}
