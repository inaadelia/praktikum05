<?php

class Bmipasien_model extends CI_Model {
	public $id;
	public $tanggal;
	public $kode;
	public $pasien;
	public $gender;
	public $berat;
	public $tinggi;
	public $bmi;
	public $status;

	 public function getAll()
    {
        // select * from bmi_pasien
        $query = $this->db->get('bmi_pasien');
        return $query;

    }

    public function findById($id)
    {
        // select * from bmi_pasien where id=$id
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
    }
}