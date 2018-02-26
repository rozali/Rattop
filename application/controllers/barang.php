<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function index()
	{
		$data['data'] = $this->barangmod->viewkredit();
		$data['dbarang'] = $data['data']->result();
		$data['jbaris'] = $data['data']->num_rows();
		$data['bakhir'] = $data['data']->last_row();
		$data['data2'] = $this->barangmod->viewahp();
		$this->load->view('admin/barang/barang',$data);
	}
	public function formpengeluaran()
	{
		$this->load->view('admin/barang/ibarang');
	}
}