<?php
	class skripsi_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function set_data(){
			$this->load->helper('url');

			$data = array{
				'tahun' => $this->input->post('tahun');
				'npm' => $this->input->post('npm');
				'nama' => $this->input->post('nama');
			};

			return $this->db->insert('test', $data);
		}
	}
?>