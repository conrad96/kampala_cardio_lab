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
	function make_appointment(){
		//send email to cardiolab gmail account
		
	}
	function pages($page = ''){
		if($page == 'cardiac_rehabilitation'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'diagnostic_echocardiography'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'ecg_monitoring'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'exercise_stress_test'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if ($page == 'holter_monitoring'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'spirometry_with_oximetry'){
			$data['page_content'] = array('content'=>array('Cardiac rehabilitation, also called cardiac rehab, is a customized outpatient program of exercise and education. It is designed to help you improve your health and help you recover from a heart attack, other forms of heart disease or surgery to treat heart disease. It often involves exercise training, emotional support and education about lifestyle changes to reduce your heart disease risk, such as eating a heart-healthy diet, keeping a healthy weight and quitting smoking. The goals of cardiac rehabilitation include establishing an individualized plan to help you regain strength, preventing your condition from worsening, reducing your risk of future heart problems, and improving your health and quality of life. Cardiac rehabilitation programs can reduce your risk of death from heart disease and reduce your risk of future heart problems. People of all ages can benefit from cardiac rehabilitation.'));
			$data['main_image'] = array(
				array('image'=> 'cardiac-150x150.jpg', 'caption'=> 'Main image')
			);
			$data['resources'] = array(
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1'),
				array('image'=> 'KCL-106-1024x684.jpg', 'caption'=> 'Doctor 1')
			);
			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}
		
		$this->load->view("pages/index", $data);
	}
}
