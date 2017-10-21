<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Fungsi_model');
	}

	public function index()
	{
		$data['wisata'] = $this->Fungsi_model->ambil_data()->result();
		//$this->load->view('home', $data);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');	
	}
	
	function pricing(){
		$data['wisata'] = $this->Fungsi_model->ambil_data()->result();
		$this->load->view('header');
		$this->load->view('pricing', $data);
		$this->load->view('footer');	
	}
	
	function services($Kode_Paket)
	{	
		$where = array('Kode_Paket' => $Kode_Paket);
		$data['wisata'] = $this->Fungsi_model->read_data($where,'wisata')->result();
		$this->load->view('form', $data);
		$this->load->view('header');
		$this->load->view('footer');		
	}
	
		function verif($Kode_Paket)
	{	
		$where = array('Kode_Paket' => $Kode_Paket);
		$data['wisata'] = $this->Fungsi_model->read_data($where,'wisata')->result();
		$this->load->view('verif', $data);	
		$this->load->view('header');
		$this->load->view('footer');		
	}
	
		function tambah(){
		$Kode_Paket = htmlspecialchars($this->input->post('Kode_Paket'));
		$Nama_Paket = htmlspecialchars($this->input->post('Nama_Paket'));
		$NO_KTP = htmlspecialchars($this->input->post('NO_KTP'));
		$Request_Tambahan = htmlspecialchars($this->input->post('Request_Tambahan'));
		
		
		/*$Nama_Paket = $this->input->post('Nama_Paket', TRUE, ENT_QUOTES, 'UTF-8');
		$NO_KTP = $this->input->post('NO_KTP', TRUE, ENT_QUOTES, 'UTF-8');
		$Request_Tambahan = $this->input->post('Request_Tambahan', TRUE, ENT_QUOTES, 'UTF-8');*/

		 //echo 
		 //$nama = htmlspecialchars($_GET['name']);
		 
		$data = array(
			'Kode_Paket' => $Kode_Paket,
			'Nama_Paket' => $Nama_Paket,
			'NO_KTP' => $NO_KTP,
			'Request_Tambahan' => $Request_Tambahan
			);
		$this->Fungsi_model->input_data($data,'order');
		redirect('welcome/thanks');                }
	
	    /*function validationtambah(){
		$this->form_validation->set_rules('NO_KTP','NO_KTP','trim|required|min_length[5]|max_length[50]|is_unique[tbl_produk.produk_nama]');
		$this->form_validation->set_rules('Request_Tambahan','Request_Tambahan','trim|required|min_length[5]|max_length[50]');	
		
		if($this->form_validation->run() != false){ 
                    $this->tambah();}
                else{
			$data['message'] = 'Masukkan KTP dengan Angka';
			//$this->load->view('admin/Bo', $data);
			//$this->load->view('admin/HeaderAdmin');
			 $this->verif();}}*/
	
                      function destroy($no){
                          $data = array('NO_KTP'=> $no
                          );
                          $this->Fungsi_model->destroy($data,'order');
                      }
                function thanks(){
		$this->load->view('header');
		$this->load->view('thanks');
		$this->load->view('footer');
	}
	
}
