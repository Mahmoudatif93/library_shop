<?php

class My_model extends CI_Model{

	public function select_model($tbl_name,$field,$data='',$war=''){
		if ($war!= '') {
			$this->db->where($war);
		}
		$q=$this->db->select($field)->from($tbl_name)->get();
		return $q->result_array();

	}
	public function databaseop($tbl_name,$mode,$data='',$wdata=''){
		if ($mode=="insert") {
			return $this->db->insert($tbl_name,$data);
		}
		elseif($mode=="delete"){
			$this->db->where($wdata);
			$this->db->delete($tbl_name,$data);
		//	return $this->db->affected_rows();
		}elseif($mode=="update"){
			$this->db->where($wdata);
			$this->db->update($tbl_name,$data);
		}

	}
}

 ?>