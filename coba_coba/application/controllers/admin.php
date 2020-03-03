<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('v_admin');
	}
}
//syntax digunakan untuk tampilan bila saat login selesai maupun saat gagal login