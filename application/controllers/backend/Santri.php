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
		$data['santri'] = $this->db->where('status_santri',0)->get('tb_santri')->result();
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
		$id_santri = $this->input->post('id_santri');
        $data = [
            'nama_santri'	=> $this->input->post('nama'),
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
        $this->db->where('id_santri',$id_santri)->insert('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Santri !</div>');
        redirect(base_url('dashboard/santri'));
    }

	public function edit($id_santri){
		$data['title'] = 'Edit Santri';
		$data['santri'] = $this->db->where('id_santri',$id_santri)->get('tb_santri')->row_array();
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
        $data = [
			'nama_santri'	=> $this->input->post('nama'),
			'nama_wali'		=> $this->input->post('nama_wali'),
			'telpon_wali'	=> $this->input->post('telpon_wali'),
            'telpon'		=> $this->input->post('telpon'),
            'tempat_lahir'	=> $this->input->post('tempat_lahir'),
            'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'id_kampus'		=> $this->input->post('kampus'),
			'angkatan'		=> $this->input->post('angkatan'),
            'waktu_update'	=> date('Y-m-d H:i:s')
        ];
        $this->db->update('tb_santri',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Santri !</div>');
        redirect(base_url('dashboard/santri'));
    }

	public function kampus(){
		if (isset($_POST['simpan'])){
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = '0';
			$config['upload_path'] = './uploads/kampus/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('logo_kampus')) {
				$foto = $this->upload->data('file_name');
			} else {
				$this->upload->display_errors();
			}
			$data = [
				'nama_kampus' => $this->input->post('nama_kampus'),
				'logo_kampus' => $foto,
			];
			$this->db->insert('tb_kampus',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambah kampus !</div>');
			redirect(base_url('dashboard/santri/kampus'));
		} elseif (isset($_POST['edit'])){
			$id_kampus = $this->input->post('id_kampus');
			$row = $this->db->where('id_kampus',$id_kampus)->get('tb_kampus')->row_array();
			$kampus = $row['nama_kampus'];
			$logo = $row['logo_lama'];
			$this->session->set_flashdata('nama_kampus',$kampus);
			$this->session->set_flashdata('logo_lama',$logo);
			$this->session->set_flashdata(	'id_kampus',$id_kampus);
			redirect(base_url('dashboard/santri/kampus'));
		}elseif (isset($_POST['update'])){
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = '0';
			$config['upload_path'] = './uploads/kampus/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('logo_kampus')) {
				$fotolama = $this->input->post('logo_lama');
				if ($fotolama != 'default.jpg') {
					unlink(FCPATH . './uploads/kampus/' . $fotolama);
				}
				$fotobaru = $this->upload->data('file_name');
				$this->db->set('logo_kampus', $fotobaru);
			} else {
				$this->upload->display_errors();
			}
			$id_kampus = $this->input->post('id_kampus');
			$data = [
				'nama_kampus' => $this->input->post('nama_kampus'),
			];
			$this->db->where('id_kampus',$id_kampus)->update('tb_kampus',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui kampus !</div>');
			redirect(base_url('dashboard/santri/kampus'));
		} elseif (isset($_POST['hapus'])){
			$id = $this->input->post('id_kampus');
			$this->db->where('id_kampus',$id)->delete('tb_kampus');
			$this->session->set_flashdata('sukses', '<div class="alert alert-danger">Berhasil menghapus kampus !</div>');
			redirect(base_url('dashboard/santri/kampus'));
		}else {
			$data['title'] = 'Data Kampus';
			$data['kampus'] = $this->db->order_by('id_kampus','DESC')->get('tb_kampus')->result();
			$this->load->view('backend/santri/kampus',$data);
		}
		
	}
	
	public function hapus($id_santri){
		$data = $this->db->where('id_santri',$id_santri)->get('tb_santri');
        foreach ($data->result() as $u){
            unlink('uploads/santri/'.$u->foto);
        } 
        $this->db->where('id_Santri',$id_santri)->delete('tb_santri');
        $this->session->set_flashdata('sukses','<div class="alert alert-danger"> Berhasil Menghapus Santri !</div>');
        redirect(base_url('dashboard/santri'));
	}
}
