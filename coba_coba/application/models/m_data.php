<?php 

	class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
	// syntax diatas berfungsi mengambil data dari database
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	// syntax diatas untuk function input data
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	//syntax diatas merupakan function dari hapus data dalam database
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	//syntax diatas merupakan function edit data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	//syntax diatas merupakan function update data
}