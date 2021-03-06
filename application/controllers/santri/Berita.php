<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['title'] = 'Data Berita';
		$data['berita'] = $this->db->order_by('id_berita','desc')->where('id_user',$id)->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->get()->result();
		$this->load->view('santri/berita/index',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Berita';
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		$this->load->view('santri/berita/tambah',$data);
	}

	public function store(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/berita/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
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
            'thumbnail'     => $foto,
			'id_user'		=> $this->input->post('id_user'),
            'waktu_buat'    => date('Y-m-d H:i:s')
        ];
		
        $this->db->insert('tb_berita',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan berita !</div>');
        redirect(base_url('santri/berita'));
    }

	public function edit($id_berita){
		$data['title'] = 'Edit Berita';
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		$data['berita'] = $this->db->where('id_berita',$id_berita)->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->get()->row_array();
		$this->load->view('santri/berita/edit',$data);
	}

	public function update(){
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/berita/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
            if ($fotolama != 'default.jpg') {
                unlink(FCPATH . './uploads/berita/' . $fotolama);
            }
            $fotobaru = $this->upload->data('file_name');
            $this->db->set('thumbnail', $fotobaru);
        } else {
            $this->upload->display_errors();
        }
		
         $judul     = $this->input->post('judul');
		 $string    = url_title($judul, 'dash', true);                                                     
		 $trim      = trim($string); 
		 $pre_slug  = strtolower(str_replace(" ", "-", $trim)); 
		 $slug       =$pre_slug.'.html'; 
		$id_berita = $this->input->post('id_berita');
        $data = [
            'judul'			=> $this->input->post('judul'),
            'slug'			=> $slug,
            'id_kategori'	=> $this->input->post('id_kategori'),
            'konten'		=> $this->input->post('konten'),
            'waktu_update'   => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_berita',$id_berita)->update('tb_berita',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui berita !</div>');
        redirect(base_url('santri/berita'));
    }


	public function kategori(){
		if (isset($_POST['simpan'])){
			$data = [
				'kategori' => $this->input->post('kategori'),
				'keterangan' => $this->input->post('keterangan')
			];
			$this->db->insert('tb_kategori',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambah kategori !</div>');
			redirect(base_url('santri/berita/kategori'));
		} elseif (isset($_POST['edit'])){
			$id_kategori = $this->input->post('id_kategori');
			$row = $this->db->where('id_kategori',$id_kategori)->get('tb_kategori')->row_array();
			$kategori = $row['kategori'];
			$keterangan = $row['keterangan'];
			$this->session->set_flashdata('kategori',$kategori);
			$this->session->set_flashdata('keterangan',$keterangan);
			$this->session->set_flashdata('id_kategori',$id_kategori);
			redirect(base_url('santri/berita/kategori'));
		}elseif (isset($_POST['update'])){
			$id_kategori = $this->input->post('id_kategori');
			$data = [
				'kategori' => $this->input->post('kategori'),
				'keterangan' => $this->input->post('keterangan')
			];
			$this->db->where('id_kategori',$id_kategori)->update('tb_kategori',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui kategori !</div>');
			redirect(base_url('santri/berita/kategori'));
		} elseif (isset($_POST['hapus'])){
			$id = $this->input->post('id_kategori');
			$this->db->where('id_kategori',$id)->delete('tb_kategori');
			$this->session->set_flashdata('sukses', '<div class="alert alert-danger">Berhasil menghapus kategori !</div>');
			redirect(base_url('santri/berita/kategori'));
		}else {
			$data['title'] = 'Kategori Berita';
			$data['kategori'] = $this->db->order_by('id_kategori','DESC')->get('tb_kategori')->result();
			$this->load->view('santri/berita/kategori',$data);
		}
		
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
