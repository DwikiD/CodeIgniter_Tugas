<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hp extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mhp');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mhp->tampil_hp();
		$this->load->view('vhp',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'id' => $this->input->post("id"),
			'nama' => $this->input->post("nama"),
			'tipe' => $this->input->post("tipe"),
			'warna' => $this->input->post("warna"),

		);
		$this->Mhp->tambah_data($insert);
		redirect('Hp/tampil');
	}

	public function delete_data($id){
		$this->Mhp->delete_data($id);
		redirect('Hp/tampil');
	}

	public function edit_data($id){
		$data['dat'] = $this->Mhp->tampil_hp_satuan($id);
		$this->load->view('vedit_data', $data);
	}

	public function edit_data_action(){
		$update = array(
			'id' => $this->input->post("id"),
			'nama' => $this->input->post("nama"),
			'tipe' => $this->input->post("tipe"),
			'warna' => $this->input->post("warna"),

		);
		$this->Mhp->edit_data($update);
		redirect('Hp/tampil');
	}
}
