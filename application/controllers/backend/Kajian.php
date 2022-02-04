<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data Kajian';
		$data['kajian'] = $this->db->from('tb_kajian')->join('tb_ustadz','tb_kajian.id_ustadz=tb_ustadz.id_ustadz')->get()->result(); 
		$this->load->view('backend/kajian/index',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Kajian';
		$data['ustadz'] = $this->db->get('tb_ustadz')->result();
		$this->load->view('backend/kajian/tambah',$data);
	} 

	public function store(){
        $data = [
            'nama_kajian'	=> $this->input->post('nama'),
			'id_ustadz'		=> $this->input->post('id_ustadz'),
			'hari' 			=> $this->input->post('hari'),
			'jam' 			=> $this->input->post('jam'),
			'pelaksanaan' 	=> $this->input->post('pelaksanaan'),
            'waktu_buat'    => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tb_kajian',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Kajian !</div>');
        redirect(base_url('dashboard/kajian'));
    }

	public function edit($id_kajian){
		$data['title'] = 'Edit Kajian';
		$data['ustadz'] = $this->db->get('tb_ustadz')->result();
		$data['kajian'] =  $this->db->where('id_kajian',$id_kajian)->from('tb_kajian')->join('tb_ustadz','tb_kajian.id_ustadz=tb_ustadz.id_ustadz')->get()->row_array();
		$this->load->view('backend/kajian/edit',$data);
	}

	public function update(){
        $id_kajian = $this->input->post('id_kajian');
        $data = [
			'nama_kajian'	=> $this->input->post('nama'),
			'id_ustadz'		=> $this->input->post('id_ustadz'),
			'hari' 			=> $this->input->post('hari'),
			'jam' 			=> $this->input->post('jam'),
			'pelaksanaan' 	=> $this->input->post('pelaksanaan'),
            'waktu_update'	=> date('Y-m-d H:i:s')
        ];
        $this->db->where('id_kajian',$id_kajian)->update('tb_kajian',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Kajian !</div>');
        redirect(base_url('dashboard/kajian'));
    }


	public function hapus($id_kajian){
        $this->db->where('id_Kajian',$id_kajian)->delete('tb_kajian');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Kajian !</div>');
        redirect(base_url('dashboard/kajian'));
	}
}
