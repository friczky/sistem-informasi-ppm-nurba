<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data Pendaftaran';
		$data['pendaftaran'] = $this->db->order_by('id_pendaftaran','desc')->get('tb_Pendaftaran')->result(); 
		$this->load->view('backend/pendaftaran/index',$data);
	}

	public function pengaturan(){
		$data['title'] = 'Pengaturan Pendaftaran';
		$this->load->view('backend/pendaftaran/pengaturan',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Pendaftaran';
		$this->load->view('backend/Pendaftaran/tambah',$data);
	}

	public function store(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/Pendaftaran/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
        } else {
            $this->upload->display_errors();
        }
		$id_Pendaftaran = $this->input->post('id_Pendaftaran');
        $data = [
            'nama'			=> $this->input->post('nama'),
			'nama_wali'		=> $this->input->post('nama_wali'),
			'telpon_wali'	=> $this->input->post('telpon_wali'),
            'telpon'		=> $this->input->post('telpon'),
            'tempat_lahir'	=> $this->input->post('tempat_lahir'),
            'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'kampus'		=> $this->input->post('kampus'),
			'angkatan'		=> $this->input->post('angkatan'),
            'foto'          => $foto,
            'waktu_buat'      => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_Pendaftaran',$id_Pendaftaran)->insert('tb_Pendaftaran',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Pendaftaran !</div>');
        redirect(base_url('dashboard/Pendaftaran'));
    }

	public function edit($id_Pendaftaran){
		$data['title'] = 'Edit Pendaftaran';
		$data['Pendaftaran'] = $this->db->where('id_Pendaftaran',$id_Pendaftaran)->get('tb_Pendaftaran')->row_array();
		$this->load->view('backend/Pendaftaran/edit',$data);
	}

	public function update(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/Pendaftaran/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
            if ($fotolama != 'default.jpg') {
                unlink(FCPATH . './uploads/Pendaftaran/' . $fotolama);
            }
            $fotobaru = $this->upload->data('file_name');
            $this->db->set('foto', $fotobaru);
        } else {
            $this->upload->display_errors();
        }
        $data = [
			'nama'			=> $this->input->post('nama'),
			'nama_wali'		=> $this->input->post('nama_wali'),
			'telpon_wali'	=> $this->input->post('telpon_wali'),
            'telpon'		=> $this->input->post('telpon'),
            'tempat_lahir'	=> $this->input->post('tempat_lahir'),
            'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'kampus'		=> $this->input->post('kampus'),
			'angkatan'		=> $this->input->post('angkatan'),
            'waktu_update'	=> date('Y-m-d H:i:s')
        ];
        $this->db->update('tb_Pendaftaran',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Pendaftaran !</div>');
        redirect(base_url('dashboard/Pendaftaran'));
    }


	public function hapus($id_Pendaftaran){
		$data = $this->db->where('id_Pendaftaran',$id_Pendaftaran)->get('tb_Pendaftaran');
        foreach ($data->result() as $u){
            unlink('uploads/Pendaftaran/'.$u->foto);
        } 
        $this->db->where('id_Pendaftaran',$id_Pendaftaran)->delete('tb_Pendaftaran');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Pendaftaran !</div>');
        redirect(base_url('dashboard/Pendaftaran'));
	}
}
