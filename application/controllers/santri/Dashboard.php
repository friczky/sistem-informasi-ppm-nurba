<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$user = $this->db->where('id_pengguna',$this->session->userdata('id'))->get('tb_santri')->row_array();
		$artikel = $this->db->where('id_user',$this->session->userdata('id'))->count_all_results('tb_berita');
		$data['title'] = 'Home' ;
		$this->load->view('santri/v_dashboard',['user'=>$user,'title' => $data['title'],'artikel' => $artikel]);
	}
}
