<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']	= 'Home';
		$this->load->view('frontend/index',$data);
	}

	public function berita()
	{
		$data['title']		= 'Home';
		$data['berita']		= $this->db->order_by('id_berita','DESC')->get('tb_berita')->result();
		$this->load->view('frontend/berita',$data); 	
	}

	public function kategori($id,$kategori)
	{
		$data['judul']		= $kategori ;
		$data['title']		= 'Home';
		$data['berita']		= $this->db->where('id_kategori',$id)->get('tb_berita')->result();
		$this->load->view('frontend/kategori',$data); 	
	}

	public function baca($slug)
	{
		$data['title']	= 'Home';
		$data['baca']	= $this->db->get_where('tb_berita',['slug'=>$slug])->row_array();
		$data['berita']	= $this->db->order_by('id_berita','DESC')->get('tb_berita',3)->result();
		$this->load->view('frontend/baca-berita',$data);
	}

	public function kajian()
	{
		$data['title']	= 'Kajian';
		$this->load->view('frontend/kajian',$data);
	}

	public function ustadz()
	{
		$data['title']	= 'Ustadz';
		$this->load->view('frontend/ustadz',$data);
	}

	public function santri()
	{
		$data['title']	= 'Santri';
		$this->load->view('frontend/santri',$data);
	}

	public function kontak()
	{
		$data['title']	= 'Home';
		$this->load->view('frontend/kontak',$data);
	}

	public function tentang(){
		$this->load->view('frontend/tentang');
	}
}
