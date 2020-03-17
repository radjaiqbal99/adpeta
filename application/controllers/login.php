<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == false){
			$this->load->view('login/login');
		}
		else{
			$this->_login();
		}
	}
	private function _login(){
		$username= $this->input->post('username');
		$password= $this->input->post('password');

		$user_akun = $this->db->get_where('akun',['username' => $username])->row_array();
		$pass_akun = $this->db->get_where('akun',['password' => $password])->row_array();
		
		if($user_akun){
			if($user_akun['is-active']==0){
				if($pass_akun){
					$data =[
						'username'=>$user_akun['username'],
						'role_id'=>$user_akun['role_id']
					];
					$this->session->set_userdata($data);
					if($user_akun['role_id']==1){
						redirect('datamaster/dashboard');
					}
					else if($user_akun['role_id']==2){
						redirect('mhs/dasmhs');
					}
					else if($user_akun['role_id']==3){
						redirect('dsn/dashbord');
					}
					else if($user_akun['role_id']==7){
						redirect('datamaster/supadmin');
					}
					
					
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah salah</div>');
					redirect('login');
				}
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Akun ini sedang aktif</div>');
			redirect('login');
			}	
		} else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Username salah</div>');
			redirect('login');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda telah berhasil keluar</div>');
			redirect('login');
	}
}
