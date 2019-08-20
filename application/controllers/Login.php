<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
			parent::__construct();
			$this->load->helper('path');
			// $this->load->model('home_model');
			$this->load->model('dashboard_model');
		}
	public function index(){
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/login');
		$this->load->view('dashboard/footer');
	}
	//verify credentials
	public function verify(){
		if (isset($_POST['submit'])&&$_POST['uname']!="") {
			$password = $_POST['password'];
			$username = $_POST['uname'];
			$res=$this->dashboard_model->login($username,$password);
			if ($res) {
				 $this->session->set_userdata('isloggedin', 'true');
				 $this->session->set_userdata('usernme', $username);
				 redirect('/home', 'refresh');
			}
			else{
				redirect('/login?suc=2', 'refresh');
			}
		}
		else{
			redirect('/login', 'refresh');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('isloggedin');
		$this->session->unset_userdata('usernme');
		redirect('/login', 'refresh');
	}
}