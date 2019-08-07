<?php
class Data_table extends CI_Model{
    public function getBarang(){
        $this->db->limit(6);
        return $this->db->get('barang')->result_array();
    }
}