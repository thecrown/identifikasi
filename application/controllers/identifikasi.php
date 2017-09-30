<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class identifikasi extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin','act');
	}
	function auth(){
		$data['username'] = $this->input->post('username');
		$data['password'] = base64_encode (base64_encode($this->input->post('password')));
		$log = $this->act->login($data);
		if($log==1)
		    {
			    redirect(base_url('operator'));
		    }
		else if($log==2)
		    {
		    	redirect(base_url('administrator'));
		    }
		else
		    {
			    redirect(base_url('identifikasi/beranda'));
		    }
	}
	public function index()
	{
		$session_data=$this->session->userdata('level');
		if($session_data=='operator'){
			redirect(base_url('index.php/operator/'));
		}else if($session_data=='administrator'){
			redirect(base_url('index.php/administrator/'));
		}
		$this->load->view('head');
		$this->load->view('index');
	
	}
	function beranda()
	{
	    $this->load->view('head');
		$this->load->view('index');
		echo"<script language=\"javascript\">alert('Username atau Password yang Anda Masukkan Salah, Silahkan Ulangi Lagi.');</script>";
	}
	
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/'));
	}
}
