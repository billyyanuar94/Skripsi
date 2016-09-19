<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *              http://example.com/index.php/welcome
         *      - or -
         *              http://example.com/index.php/welcome/index
         *      - or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
                $this->load->view('skripsi');
        }
        //Check database
        public function view_cekMahasiswa(){
                $data = $this->test_model->getAllMahasiswa();
                $this->load->view('cek_mahasiswa', array('data' => $data));
        }
        
        public function tambahDataMahasiswa(){
                $semester = $_POST['semester'];
                $tahun = $_POST['tahun'];
                $data_insert = array(
                        'semester' => $semester,
                        'tahun' => $tahun
                );
                $res = $this->test_model->insertDataMahasiswa('test', $data_insert);
                redirect('/test/index', 'refresh');
        }
        
}
