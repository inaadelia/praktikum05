<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {
	public function index()
	{
		$this->load->model('pasien_model','pasien1');
		$this->pasien1->id 			= 1;
		$this->pasien1->kode 		= '010001';
		$this->pasien1->nama 		= 'Faiz Fikri';
		$this->pasien1->tmp_lahir 	= 'Jakarta';
		$this->pasien1->gender 		= 'L';

		$this->load->model('pasien_model','pasien2');
		$this->pasien2->id 			= 2;
		$this->pasien2->kode 		= '020001';
		$this->pasien2->nama 		= 'Pandan Wangi';
		$this->pasien2->tmp_lahir 	= 'Jakarta';
		$this->pasien2->gender 		= 'P';

		$this->load->model('pasien_model','pasien3');
		$this->pasien3->id 			= 3;
		$this->pasien3->kode 		= '030001';
		$this->pasien3->nama 		= 'Ina Adelia';
		$this->pasien3->tmp_lahir 	= 'Jakarta';
		$this->pasien3->gender 		= 'P';

		$this->load->model('bmi_model','bmi1');
		$this->bmi1->tinggi	= 165;
		$this->bmi1->berat 	= 55;

		$this->load->model('bmi_model','bmi2');
		$this->bmi2->tinggi	= 160;
		$this->bmi2->berat 	= 70;

		$this->load->model('bmi_model','bmi3');
		$this->bmi3->tinggi	= 160;
		$this->bmi3->berat 	= 45;

		$this->load->model('bmipasien_model','bmipasien1');
		$this->bmipasien1->id		= $this->pasien1->id;
		$this->bmipasien1->tanggal 	= '2021-07-03';
		$this->bmipasien1->pasien 	= $this->pasien1->nama;
		$this->bmipasien1->bmi 		= $this->bmi1->nilaiBMI($this->bmi1->tinggi,$this->bmi1->berat);

		$this->load->model('bmipasien_model','bmipasien2');
		$this->bmipasien2->id		= $this->pasien2->id;
		$this->bmipasien2->tanggal 	= '2021-06-03';
		$this->bmipasien2->pasien 	= $this->pasien2->nama;
		$this->bmipasien2->bmi 		= $this->bmi2->nilaiBMI($this->bmi2->tinggi,$this->bmi2->berat);

		$this->load->model('bmipasien_model','bmipasien3');
		$this->bmipasien3->id		= $this->pasien3->id;
		$this->bmipasien3->tanggal 	= '2021-05-03';
		$this->bmipasien3->pasien 	= $this->pasien3->nama;
		$this->bmipasien3->bmi 		= $this->bmi3->nilaiBMI($this->bmi3->tinggi,$this->bmi3->berat);

		$list_bmipasien 			= [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
		$data['list_bmipasien']		= $list_bmipasien;

		$data['bmi_model'] 	= $this->bmi1;
		$data['pasien1']	= $this->pasien1;
		$data['pasien2']	= $this->pasien2;
		$data['pasien3']	= $this->pasien3;
		$data['bmi1'] 		= $this->bmi1;
		$data['bmi2'] 		= $this->bmi2;
		$data['bmi3'] 		= $this->bmi3;

		$this->load->view('include/header');
		$this->load->view('bmi/index',$data);
		$this->load->view('include/footer');
	}

	public function list(){
		$this->load->model('Bmipasien_model');// load model
		$this->db->select('*');
		$this->db->join('pasien','pasien.id = bmi_pasien.pasien_id');
		$data['bmi'] = $this->db->get('bmi_pasien');// query

		$this->load->view('include/header');
		$this->load->view('bmi/list',$data);
		$this->load->view('include/footer');
	}

	public function view($id){
		$this->load->model('Bmipasien_model');
		$this->db->select('*');
		$this->db->join('pasien','pasien.id = bmi_pasien.pasien_id');
		$this->db->where('bmi_pasien.id',$id);
		$data['bmi'] = $this->db->get('bmi_pasien')->row();// query

		$this->load->view('include/header');
		$this->load->view('bmi/view',$data);
		$this->load->view('include/footer');
	}
}