<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controller extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('model_general');
			$this->load->view('links');
			$this->load->view('sticky/header');
			$this->load->library('form_validation');
			$this->load->library('session');
	}

	public function index()
	{
		$data['recommend'] = $this->model_general->get_homepageRec();
		$this->load->view('homepage',$data);
		$this->load->view('sticky/footer');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->model_general->check_login($username,$password);
		if($cek > 0 ){
			$data_session = $this->model_general->get_dataByUser($username);
			$data_session['status'] = login;
			$this->session->set_userdata($data_session);
			redirect(site_url());
		}else{
			echo "Username atau Password salah !";
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

	public function register()
	{
		$this->form_validation->set_rules('usernamereg', 'Username', 'required');
        $this->form_validation->set_rules('passwordreg', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
        if ($this->form_validation->run() === FALSE){  
           redirect(site_url());
        }else{
        	$data = array(
        		'username' => $this->input->post('usernamereg'),
        		'password' => $this->input->post('passwordreg'),
        		'email' => $this->input->post('email'),
        		'name' => $this->input->post('name'),
        		'phone' => $this->input->post('phone'),

        	);
        	$check = $this->model_general->insertUser($data);
        	if($check != false){
        		$data_session = $this->model_general->get_dataByUser($data['username']);
        		$data_session['status'] = login;
        		$this->session->set_userdata($data_session);	
        	}else{
        		echo "Registration failed";
        	}
        	redirect(site_url());
        }
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['keyword'] = $keyword;
		$data['searchRes'] = $this->model_general->searchData($keyword);
		$this->load->view('search',$data,);
		$this->load->view('sticky/footer');
	}
	public function kosDetail($kosID)
	{
		$data['kos'] = $this->model_general->get_dataByID($kosID);
		$this->load->view('kosDetail',$data);
		$this->load->view('sticky/footer');
	}
	public function transfer()
	{
		$this->load->view('konfirmasiTransfer');
	}
}
