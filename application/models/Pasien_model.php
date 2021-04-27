<?php

class Pasien_model extends CI_Model{

    public $id;
    public $kode;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;

    public function getAll(){
        // select * from pasien
        $query = $this->db->get('pasien');
        return $query;
        }
    
        public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}



?>