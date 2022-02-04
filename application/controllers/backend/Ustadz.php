<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data Ustadz';
		$data['ustadz'] = $this->db->order_by('id_ustadz','desc')->get('tb_ustadz')->result(); 
		$this->load->view('backend/ustadz/index',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Ustadz';
		$this->load->view('backend/ustadz/tambah',$data);
	} 

	public function store(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/ustadz/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
        } else {
            $this->upload->display_errors();
        }
        $data = [
            'nama'			=> $this->input->post('nama'),
			'telpon'		=> $this->input->post('telpon'),
			'alamat'		=> $this->input->post('alamat'),
            'foto'          => $foto,
            'waktu_buat'      => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tb_ustadz',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Ustadz !</div>');
        redirect(base_url('dashboard/ustadz'));
    }

	public function edit($id_ustadz){
		$data['title'] = 'Edit Ustadz';
		$data['ustadz'] = $this->db->where('id_ustadz',$id_ustadz)->get('tb_ustadz')->row_array();
		$this->load->view('backend/ustadz/edit',$data);
	}

	public function update(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/Ustadz/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
            if ($fotolama != 'default.jpg') {
                unlink(FCPATH . './uploads/ustadz/' . $fotolama);
            }
            $fotobaru = $this->upload->data('file_name');
            $this->db->set('foto', $fotobaru);
        } else {
            $this->upload->display_errors();
        }
		$id_ustadz = $this->input->post('id_ustadz');
        $data = [
			'nama'			=> $this->input->post('nama'),
			'telpon'		=> $this->input->post('telpon'),
			'alamat'		=> $this->input->post('alamat'),
            'waktu_update'	=> date('Y-m-d H:i:s')
        ];
        $this->db->where('id_ustadz',$id_ustadz)->update('tb_ustadz',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Ustadz !</div>');
        redirect(base_url('dashboard/ustadz'));
    }


	public function hapus($id_ustadz){
		$data = $this->db->where('id_ustadz',$id_ustadz)->get('tb_ustadz');
        foreach ($data->result() as $u){
            unlink('uploads/ustadz/'.$u->foto);
        } 
        $this->db->where('id_Ustadz',$id_ustadz)->delete('tb_ustadz');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Ustadz !</div>');
        redirect(base_url('dashboard/ustadz'));
	}
}
