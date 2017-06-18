<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skripsi_model extends CI_Model {

    public function insertDataMahasiswa($tableName, $data){
        $res = $this->db->insert($tableName, $data);
    }
}
