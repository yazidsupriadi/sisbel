<?php 

class Mahasiswa_model extends CI_Model
{
    private $table = "siswa";

    public $id;
    public $nama;
    public $nis;
    public $no_telpon;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nis',
            'label' => 'Nis',
            'rules' => 'required'],
            
            ['field' => 'no_telpon',
            'label' => 'Nomor Telepon',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id= uniqid();
        $this->nama = $post["nama"];
        $this->nis = $post["nis"];
        $this->no_telpon = $post["no_telpon"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id= uniqid();
        $this->nama = $post["nama"];
        $this->nis = $post["nis"];
        $this->no_telpon = $post["no_telpon"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}

?>