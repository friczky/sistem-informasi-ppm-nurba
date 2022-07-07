<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->db->from('tb_pengguna')->join('tb_santri','tb_santri.id_pengguna = tb_pengguna.id_pengguna')->where('tb_pengguna.id_pengguna',$id)->get()->row_array();
		$data['artikel'] = $this->db->where('id_user',$this->session->userdata('id'))->count_all_results('tb_berita');
		$data['title'] = 'Home' ;
		$this->load->view('santri/v_dashboard',$data);
	}
}
