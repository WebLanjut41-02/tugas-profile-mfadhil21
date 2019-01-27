<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class c_tugas extends CI_Controller {
		public function __construct()
		{
			parent::__construct();

		}
		public function index()
		{
			$this->load->view('v_bio');

		}
		public function input(){
			$nama= $this->input->post('nama');
			$alamat= $this->input->post('alamat');
			$desk= $this->input->post('desk');
			echo $nama; 
			echo "<br>";
			echo $alamat;
			echo "<br>";
			echo $desk;

		}
		public function foto(){		
			$this->load->view('v_foto');
		}
		public function folio(){		
			$this->load->view('v_folio');
		}
		public function komen(){		
			$this->load->view('v_komen');
		}
	
	}
	
	/* End of file c_tugas */
	/* Location: ./application/controllers/c_tugas */
?>