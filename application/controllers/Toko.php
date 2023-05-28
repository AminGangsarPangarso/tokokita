<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['toko']=$this->Madmin->get_all_data('tbl_toko')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/toko/index', $data);
		$this->load->view('home/layout/footer');
	}

	public function add(){
		$this->load->view('home/layout/header');
		$this->load->view('home/toko/form_tambah');
		$this->load->view('home/layout/footer');
	}

	public function validasi_save()
	{
		$this->form_validation->set_rules('namaToko', 'namaToko', 'trim|required');
		if ($this->form_validation->run() == false) {
			redirect('toko');
		} else {
			$this->save();
		}
	}

	public function save(){
		$nama_toko = $this->input->post('namaToko');
		$cek = $this->Madmin->cek_toko($nama_toko)->row_array();
		if ($cek['namaToko'] == $nama_toko) {
			echo "<script>alert('Nama Toko yang Anda Inputkan Telah Digunakan. Pilih Nama Lain!');</script>";
			$this->add();
		} else{
			$id = $this->session->userdata('idKonsumen');
			$deskripsi = $this->input->post('deskripsi');
			$config['upload_path'] = './assets/logo_toko/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('logo')){
				$data_file = $this->upload->data();
				$data_insert=array('idKonsumen' => $id,
									'namaToko' => $nama_toko,
									'logo' =>  $data_file['file_name'],
									'deskripsi' => $deskripsi,
								'statusAktif' => 'Y');
				$this->Madmin->insert('tbl_toko', $data_insert);
				redirect('toko');
			} else {
				redirect('toko/add');
			}
		}
	}
	
	public function get_by_id($id){
		if(empty($this->session->userdata('idKonsumen'))){
			redirect('toko');
		}
		$dataWhere = array('idToko'=>$id);
		$data['toko'] = $this->Madmin->get_by_id('tbl_toko', $dataWhere)->row_object();
		$this->load->view('home/layout/header');
		$this->load->view('home/toko/formEdit', $data);
		$this->load->view('home/layout/footer');
	}
	
	public function validasi_edit()
	{
		$this->form_validation->set_rules('namaToko', 'namaToko', 'trim|required');
		if ($this->form_validation->run() == false) {
			redirect('toko');
		} else {
			$this->edit();
		}
	}

	public function edit(){
		if(empty($this->session->userdata('idKonsumen'))){
			redirect('toko');
		}
		$id = $this->input->post('idToko');	
		$nama_toko = $this->input->post('namaToko');
		$cek = $this->Madmin->cek_toko($nama_toko)->row_array();
		if ($cek['namaToko'] == $nama_toko) {
			echo "<script>alert('Nama Toko yang Anda Inputkan Telah Digunakan. Pilih Nama Lain!');</script>";
			$this->index();
		} else{
			$idKonsumen = $this->input->post('idKonsumen');	
			$deskripsi = $this->input->post('deskripsi');
			$status = $this->input->post('status');
			$config['upload_path'] = './assets/logo_toko/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('logo')){
				$data_file = $this->upload->data();
				$dataUpdate=array('idKonsumen' => $idKonsumen,
									'namaToko' => $nama_toko,
									'logo' =>  $data_file['file_name'],
									'deskripsi' => $deskripsi,
									'statusAktif' => $status);
				$this->Madmin->update('tbl_toko', $dataUpdate, 'idToko', $id);
				redirect('toko');
			} else {
				redirect('toko');
			}
		}
	}

	public function delete($id){
		if(empty($this->session->userdata('idKonsumen'))){
			redirect('toko');
		}
		$this->Madmin->delete('tbl_toko', 'idToko', $id);
		redirect('toko');
	}
}