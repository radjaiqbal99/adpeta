<?php 

class Super_admin extends CI_Model{
	function tampil_data(){
		return $this->db->get('akun');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
		
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}