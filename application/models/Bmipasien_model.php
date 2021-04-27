<?php

class Bmipasien_model extends CI_Model{

    public $id;
    public $tanggal;
    public $berat;
    public $tinggi;
    public $bmi;
    public $status_bmi;
    public $catatan;
    public $pasien_id;
    

    public function getAll(){
        // select * from pasien
        $this->db->select('*');
        $this->db->from('bmi_pasien');
        $this->db->join('pasien','pasien.id=bmi_pasien.pasien_id');
        $query = $this->db->get();
        return $query;
        }
    
        public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
    }
}



?>