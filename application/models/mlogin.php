<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {
	function login($data){
		$cek=$this->db->where($data)->get('tb_user');
		if($cek->num_rows()>0){
			$dt=$cek->row_array();
			$dt['password']='Not Available';
			
			if($dt['level']=='operator'){
				$this->session->set_userdata($dt);
				return 1;
			}else if($dt['level']=='administrator'){
				$this->session->set_userdata($dt);
				return 2;
			}
			return 0;
		}else{
			return 0;
		}
	}
}
?>