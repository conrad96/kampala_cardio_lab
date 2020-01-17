<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function index(){
        $data['page'] = 'Home';
        $this->load->view("index", $data);
    }
    function about(){
		$data['page'] = 'About';
		$data['resources'] = array(
			array('image'=> 'KCL-076-1024x684.jpg'),
			array('image'=> 'KCL-086-1024x684.jpg'),
			array('image'=> 'KCL-019-1024x683.jpg')
		);
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
			$data['main_image'] = array();
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'diagnostic_echocardiography'){
			$data['page_content'] = array('content'=>array('Echocardiography is a test that uses sound waves to allow the doctor monitor how the heart and its valves are functioning. It helps the doctor spot the following:<br />
			<ul class="list-group values-list">
				<li class="list-group-item">Blood clots in the heart</li>
				<li class="list-group-item">Fluid in the sac around the heart</li>
				<li class="list-group-item">Problems with the aorta (the main artery connected to the heart)</li>
			</ul><br />
		An echocardiogram is key in determining the health of the heart muscle, especially after a heart attack. Taking an echocardiogram is painless.'));
			$data['main_image'] = array(
				array('image'=> 'KCL-069-1024x684.jpg', 'caption'=> 'Diagnostic Echocardiography')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'ecg_monitoring'){
			$data['page_content'] = array('content'=>array('
			An electrocardiogram (ECG/EKG) is a simple, painless test that measures the heart’s electrical activity. Every heartbeat is triggered by an electrical signal that starts at the top of the heart and travels to the bottom. The doctor may recommend an ECG/EKG if there are symptoms or signs that may suggest a heart problem, including:<br />
				<ul class="list-group values-list">
					<li class="list-group-item">Pain in the chest</li>
					<li class="list-group-item">Trouble breathing</li>
					<li class="list-group-item">Feeling tired or weak</li>
					<li class="list-group-item">Pounding, racing, or fluttering of your heart</li>
					<li class="list-group-item">A feeling that your heart is beating unevenly</li>
					<li class="list-group-item">Detection of unusual sounds when your doctor listens to your heart</li>
				</ul>
			'));
			$data['main_image'] = array(
				array('image'=> 'KCL-113-768x513.jpg', 'caption'=> 'ECG Monitoring')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'exercise_stress_test'){
			$data['page_content'] = array('content'=>array('
				The exercise stress test, also referred to as an exercise test or treadmill test, is used to determine how well the heart responds during times when it is working its hardest. It is primarily used to help the doctor determine if the heart receives enough oxygen and proper blood flow when it needs it most, such as when one is exercising. 
			'));
			$data['main_image'] = array(
				array('image'=> 'KCL-127-768x513.jpg', 'caption'=> 'Exercise Stress Test')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if ($page == 'holter_monitoring'){
			$data['page_content'] = array('content'=>array('
			Holter monitor testing is also sometimes called ambulatory electrocardiography. It is a continuous test that uses a Holter monitor, a small battery-powered medical device that measures the heart’s rate and rhythm.
			'));
			$data['main_image'] = array(
				array('image'=> 'KCL-139-768x513.jpg', 'caption'=> 'Holter Monitoring')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'spirometry_with_oximetry'){
			$data['page_content'] = array('content'=>array('
			Spirometry is a standard test used to measure how well the lungs are functioning. The test works by measuring airflow into and out of the lungs. To take a spirometry test, one has to breathe into a small machine called a spirometer. This medical device records the amount of air breathed in and out, and the speed of one’s breathing.The test usually takes about 15 minutes. 
			'));
			$data['main_image'] = array(
				array('image'=> 'KCL-146-768x513.jpg', 'caption'=> 'Spirometry With Oximetry')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}else if($page == 'sleep_apnea_treatment'){
			$data['page_content'] = array('content'=>array('
			Sleep apnea is a common sleep disorder characterized by repeated interruptions in   breathing throughout the sleep cycle.These interruptions, called apneas, are caused by the collapse of soft tissue in the airway, which prevents oxygen from reaching the lungs. Weak muscles in the airway, a large tongue, obesity, and other factors may cause airway tissue to collapse and obstruct breathing.Sleep apnea disrupts the sleep cycle and can dramatically impact energy, mental performance, and long-term health. In some cases, if left untreated, sleep apnea can be fatal.
			'));
			$data['main_image'] = array(
				array('image'=> 'KCL-158-768x513.jpg', 'caption'=> 'Sleep Apnea Treatment')
			);
			$data['resources'] = array();

			if(!empty($page)){
				$title = str_replace('_', ' ', $page);
				$data['page_title'] = ucwords($title);
			}
		}
		
		$this->load->view("pages/index", $data);
	}
	function team(){
		$this->load->view("team");
	}
	function contact_kcl(){
		if(!empty($_POST)){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			//send email
			$subject = 'INQUIRY';

			$this->email->from($email, $name);
			$this->email->to(DEFAULT_EMAIL);
			$this->email->subject($subject);
			$this->email->message($message);
			//send
			$send_email = $this->email->send();
			if($send_email){
				print '<i class="alert alert-success">Email sent successfully</i>';
			}else{
				print '<i class="alert alert-danger">An Error occured!. Email not sent.</i>';
			}
		}else{
			print '<i class="alert alert-warning">An Error occured. please try again</i>';
		}
	}
}
