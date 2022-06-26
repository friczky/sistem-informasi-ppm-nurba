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
		$id_pengguna = $this->session->userdata('id');
		
		$data['title'] 			= 'Pendaftaran Santri Baru';
		$data['santri']			= $this->db->where('id_pengguna',$id_pengguna)->get('tb_santri')->row_array();
		$this->load->view('santri/pendaftaran/index',$data);
	}

	public function berkas(){
		$id = $this->session->userdata('id');
		$data['title'] = 'Berkas Pendaftaran';
		$data['berkas'] = $this->db->where('id_user',$id)->get('tb_berkas')->row_array() ;
		$this->load->view('santri/pendaftaran/berkas',$data);
	}

	public function update_berkas(){
		$config['allowed_types'] = 'docx|pdf|jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/pendaftar/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('formulir')) {
			$formulir_lama = $this->input->post('formulir_lama');
            if ($formulir_lama != 'default.jpg') {
                unlink(FCPATH . './uploads/pendaftar/' . $formulir_lama);
            }
            $formulir = $this->upload->data('file_name');
            $this->db->set('formulir', $formulir);
        } else {
            $this->upload->display_errors();
        }

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('surat_izin')) {
			$surat_lama = $this->input->post('surat_lama');
            if ($surat_lama != 'default.jpg') {
                unlink(FCPATH . './uploads/pendaftar/' . $surat_lama);
            }
            $surat = $this->upload->data('file_name');
            $this->db->set('surat_izin', $surat);
        } else {
            $this->upload->display_errors();
        }

		$id = $this->input->post('id_berkas');

        $this->db->where('id_berkas',$id)->update('tb_berkas');
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil mengupload berkas !</div>');
        redirect(base_url('santri/pendaftaran/berkas'));
	}

	public function tambah(){
		$data['title'] = 'Tambah Berita';
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		$this->load->view('santri/berita/tambah',$data);
	}

	public function store(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/santri/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
        } else {
            // $this->upload->display_errors();
        }

		$data_pendaftar = [
			'id_pengguna'	=> $this->session->userdata('id'),
		];

		$berkas = [
			'id_user'	=> $this->session->userdata('id'),
		];

        $data = [
			'id_pengguna' 	=> $this->session->userdata('id'),
            'nama_santri'	=> $this->input->post('nama'),
			'nama_panggilan'=> $this->input->post('nama_panggilan'),
			'nama_wali'		=> $this->input->post('nama_wali'),
			'tempat_lahir'	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'cita_cita'		=> $this->input->post('cita_cita'),
			'alamat'  		=> $this->input->post('alamat_asal'),
			'email'			=> $this->input->post('email'),
			'telpon'		=> $this->input->post('telpon'),
			'telpon_wali'	=> $this->input->post('telpon_wali'),
			'kampus'		=> $this->input->post('kampus'),
			'semester'		=> $this->input->post('semester'),
			'prodi'			=> $this->input->post('prodi'),
			'status_santri'	=> 1 ,
			'foto'			=> $foto,
        ];

		$this->db->insert('tb_berkas',$berkas);
		$this->db->insert('tb_pendaftaran',$data_pendaftar);
        $this->db->insert('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Form Pendaftaran Santri !</div>');
        redirect(base_url('santri/pendaftaran'));
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

		$id = $this->input->post('id');

        $data = [
            'nama_santri'	=> $this->input->post('nama'),
			'nama_panggilan'=> $this->input->post('nama_panggilan'),
			'nama_wali'		=> $this->input->post('nama_wali'),
			'tempat_lahir'	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'cita_cita'		=> $this->input->post('cita_cita'),
			'alamat'  		=> $this->input->post('alamat_asal'),
			'email'			=> $this->input->post('email'),
			'telpon'		=> $this->input->post('telpon'),
			'telpon_wali'	=> $this->input->post('telpon_wali'),
			'kampus'		=> $this->input->post('kampus'),
			'semester'		=> $this->input->post('semester'),
			'prodi'			=> $this->input->post('prodi'),
			
        ];

        $this->db->where('id_santri',$id)->update('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Form Pendaftaran Santri !</div>');
        redirect(base_url('santri/pendaftaran'));
    }



	public function hapus($id_berita){
		$data = $this->db->where('id_berita',$id_berita)->get('tb_berita');
        foreach ($data->result() as $u){
            unlink('uploads/berita/'.$u->foto);
        } 
        $this->db->where('id_berita',$id_berita)->delete('tb_berita');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Berita !</div>');
        redirect(base_url('santri/berita'));
	}
	
}
