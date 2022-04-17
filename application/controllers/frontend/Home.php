<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['title']	= 'Home';
		$data['berita']		= $this->db->order_by('id_berita','DESC')->get('tb_berita',4)->result();
		$data['kategori']	= $this->db->get('tb_kategori')->result();
		$data['ustadz']	= $this->db->order_by('id_ustadz','RANDOM')->get('tb_ustadz',3)->result();
		$data['warna']= array('bg-1','bg-2','bg-3','bg-4','bg-5');
		$data['kajian']	= $this->db->order_by('id_kajian','RANDOM')->get('tb_kajian',5)->result();
		$this->load->view('frontend/index',$data);
	}

	public function berita()
	{
		$data['title']		= 'Home';
		$data['berita']		= $this->db->order_by('id_berita','DESC')->get('tb_berita')->result();
		$data['kategori']	= $this->db->get('tb_kategori')->result();
		$this->load->view('frontend/berita',$data); 	
	}

	public function kategori($id,$kategori)
	{
		$data['judul']		= $kategori ;
		$data['title']		= 'Home';
		$data['berita']		= $this->db->where('id_kategori',$id)->get('tb_berita')->result();
		$data['kategori']	= $this->db->get('tb_kategori')->result();
		$this->load->view('frontend/kategori',$data); 	
	}

	public function baca($slug)
	{
		$data['title']	= 'Home';
		$data['baca']	= $this->db->get_where('tb_berita',['slug'=>$slug])->row_array();
		$data['berita']	= $this->db->order_by('id_berita','DESC')->get('tb_berita',3)->result();
		$data['kategori']	= $this->db->get('tb_kategori')->result();
		$this->load->view('frontend/baca-berita',$data);
	}

	public function kajian()
	{
		$data['title']	= 'Kajian';
		$data['kajian']	= $this->db->order_by('id_kajian','DESC')->get('tb_kajian')->result();
		$this->load->view('frontend/kajian',$data);
	}

	public function ustadz()
	{
		$data['title']	= 'Ustadz';
		$data['ustadz']	= $this->db->order_by('id_ustadz','DESC')->get('tb_ustadz')->result();
		$this->load->view('frontend/ustadz',$data);
	}

	public function santri()
	{
		$data['title']	= 'Santri';
		$data['santri']	= $this->db->order_by('id_santri','DESC')->get('tb_santri')->result();
		$this->load->view('frontend/santri',$data);
	}

	public function kontak()
	{
		$data['title']	= 'Kontak';
		$data['tentang'] = $this->db->get('tb_sistem')->row_array();
		$this->load->view('frontend/kontak',$data);
	}

	public function tentang(){
		$data['title']	= 'Tentang';
		$data['tentang'] = $this->db->get('tb_sistem')->row_array();
		$this->load->view('frontend/tentang',$data);
	}
}
