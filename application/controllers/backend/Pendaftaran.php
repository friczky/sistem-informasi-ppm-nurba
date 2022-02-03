<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

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
		$data['title'] = 'Data Jadwal pendaftaran';
		$this->load->view('backend/pendaftaran/index',$data);
	}

	public function tambah(){
		$data['title'] ='Tambah Jadwal pendaftaran';
		$this->load->view('backend/pendaftaran/tambah',$data);
	}

	public function edit(){
		$data['title']= 'Edit Jadwal pendaftaran';
		$this->load->view('backend/pendaftaran/edit',$data);
	}

	public function hapus(){
		$this->load->view('backend/pendaftaran/edit');
	}

	public function pengaturan(){
		$data['title'] = 'Pengaturan Pendaftaran';
		$this->load->view('backend/pendaftaran/pengaturan',$data);
	}
}
