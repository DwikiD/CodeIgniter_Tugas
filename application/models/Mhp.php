<?php

class Mhp extends CI_Model{

	public function tampil_hp(){
		$query = $this->db->get("hp");
		return $query->result();
	}

	public function tampil_hp_satuan($id) {
		$query = $this->db->get_where("hp", array('id'=> $id));
		return $query->row();
	}

	public function tambah_data($data){
		$this->db->insert("hp",$data);
	}

	public function delete_data($id){
		$this->db->where("id",$id);
		$this->db->delete("hp");
	}

	public function edit_data($data) {
		$this->db->where('id', $data['id']);
		$this->db->update('hp', $data);

	}
}
