<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

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
		$data['title'] = 'Data Ustadz';
		$this->load->view('backend/ustadz/index',$data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Data Ustadz';
		$this->load->view('backend/ustadz/tambah',$data);
	}

	public function edit(){
		$data['title'] = 'Edit Data Ustadz';
		$this->load->view('backend/ustadz/edit',$data);
	}

	public function hapus(){
		$this->load->view('backend/ustadz/edit');
	}
}
