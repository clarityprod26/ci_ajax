<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index(){
		$this->load->view('v_barang');
	}

	function data_barang(){
		$data=$this->m_barang->barang_list();
		echo json_encode($data);
	}

	function get_barang(){
		$sid=$this->input->get('id');
		$data=$this->m_barang->get_barang_by_kode($sid);
		echo json_encode($data);
	}

	function simpan_barang(){
		$sid=$this->input->post('sid');
		$nid=$this->input->post('nid');
		$napel=$this->input->post('napel');
		$order=$this->input->post('order');
		$stat=$this->input->post('stat');
		$accb=$this->input->post('accb');
		$pkt=$this->input->post('pkt');
		$tglpes=$this->input->post('tglpes');
		$tglhir=$this->input->post('tglhir');
		$data=$this->m_barang->simpan_barang($sid,$nid,$napel,$order,$stat,$accb,$pkt,$tglpes,$tglhir);
		echo json_encode($data);
	}

	function update_barang(){
		$sid=$this->input->post('sid');
		$nid=$this->input->post('nid');
		$napel=$this->input->post('napel');
		$order=$this->input->post('order');
		$stat=$this->input->post('stat');
		$accb=$this->input->post('accb');
		$pkt=$this->input->post('pkt');
		$tglpes=$this->input->post('tglpes');
		$tglhir=$this->input->post('tglhir');
		$data=$this->m_barang->update_barang($sid,$nid,$napel,$order,$stat,$accb,$pkt,$tglpes,$tglhir);
		echo json_encode($data);
	}

	function hapus_barang(){
		$sid=$this->input->post('kode');
		$data=$this->m_barang->hapus_barang($sid);
		echo json_encode($data);
	}

}