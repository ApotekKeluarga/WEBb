<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan extends CI_Controller {
function __construct(){
		parent ::__construct();
		$this -> load -> model ('Pesanan_model');
	}
	public function index()
	{
		$data = array('data_pesanan'=> $this -> Pesanan_model -> get_pesan(),);
		$this->load->view('Pesan/Pesanan',$data);
	}

	function tambah_pesanan(){
		$this->load->view('Pesanan/Tambah_pesanan');
	}
	function detailPesanan($id){
	$row = $this -> Pesanan_model -> get_by_id($id);
		if($row){
			$data = array(
				'kd_order' => $row -> kd_order,
				'kd_user' => $row -> kd_user,
				'nama' => $row -> nm,
				'no_telp' => $row -> no_telp,
				'tgl_order' => $row -> tgl_order,
				'Detail_alamat' => $row -> Detail_alamat,
				'mtd_pengiriman' => $row -> mtd_pengiriman,
				'mtd_pembayaran' => $row -> mtd_pembayaran,
			);
			$this -> load -> view('Pesan/Detail',$data);
		}
		else{
			redirect(base_url().'Pesanan');
		}
	}
}
