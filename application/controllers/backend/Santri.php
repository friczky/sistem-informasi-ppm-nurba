<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data Santri';
		$data['santri'] = $this->db->order_by('id_santri','desc')->get('tb_santri')->result(); 
		$this->load->view('backend/santri/index',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Santri';
		$this->load->view('backend/santri/tambah',$data);
	}

	public function store(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/santri/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
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
            'foto'          => $foto,
            'waktu_buat'      => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Santri !</div>');
        redirect(base_url('dashboard/santri'));
    }

	public function edit($id_Santri){
		$data['title'] = 'Edit Santri';
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		$data['Santri'] = $this->db->where('id_Santri',$id_Santri)->from('tb_Santri')->join('tb_kategori','tb_kategori.id_kategori = tb_Santri.id_kategori')->get()->row_array();
		$this->load->view('backend/santri/edit',$data);
	}

	public function update(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/santri/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
            if ($fotolama != 'default.jpg') {
                unlink(FCPATH . './uploads/santri/' . $fotolama);
            }
            $fotobaru = $this->upload->data('file_name');
            $this->db->set('foto', $fotobaru);
        } else {
            $this->upload->display_errors();
        }
         $judul     = $this->input->post('judul');
		 $string    = url_title($judul, 'dash', true);                                                     
		 $trim      = trim($string); 
		 $pre_slug  = strtolower(str_replace(" ", "-", $trim)); 
		 $slug       =$pre_slug.'.html'; 

        $data = [
            'judul'			=> $this->input->post('judul'),
            'slug'			=> $slug,
            'id_kategori'	=> $this->input->post('id_kategori'),
            'konten'		=> $this->input->post('konten'),
            'waktu_update'   => date('Y-m-d H:i:s')
        ];
        $this->db->update('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Santri !</div>');
        redirect(base_url('dashboard/santri'));
    }


	public function hapus($id_Santri){
		$data = $this->db->where('id_santri',$id_Santri)->get('tb_Santri');
        foreach ($data->result() as $u){
            unlink('uploads/santri/'.$u->foto);
        } 
        $this->db->where('id_Santri',$id_Santri)->delete('tb_santri');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Santri !</div>');
        redirect(base_url('dashboard/santri'));
	}
}
