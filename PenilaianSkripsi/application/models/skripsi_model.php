<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test_model extends CI_Model {

    public function insertDataMahasiswa($tableName, $data){
        $res = $this->db->insert($tableName, $data);
    }
    
    public function getAllMahasiswa(){
        $query = $this->db->get('beritaacarasidangskripsi');
        return $query->result_array();
    }
}
