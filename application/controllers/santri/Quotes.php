<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['title'] = 'Quotes Santri';
		$data['quotes'] = $this->db->where('id_pengguna',$id)->get('tb_quotes')->result();
		$this->load->view('santri/quotes/index',$data);
	}

	public function store()
	{
		if (isset($_POST['simpan'])){
			$data = [
				'id_pengguna' => $this->session->userdata('id'),
				'judul' => $this->input->post('judul'),
				'quotes' => $this->input->post('quotes')
			];
			$this->db->insert('tb_quotes',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambah quotes !</div>');
			redirect(base_url('santri/quotes'));
		} elseif (isset($_POST['edit'])){
			$id_q = $this->input->post('id');
			$row = $this->db->where('id',$id_q)->get('tb_quotes')->row_array();
			$judul = $row['judul'];
			$quotes = $row['quotes'];
			$this->session->set_flashdata('judul',$judul);
			$this->session->set_flashdata('quotes',$quotes);
			$this->session->set_flashdata('id_q',$id_q);
			redirect(base_url('santri/quotes'));
		}elseif (isset($_POST['update'])){
			$id_q = $this->input->post('id_q');
			$data = [
				'judul' => $this->input->post('judul'),
				'quotes' => $this->input->post('quotes')
			];
			$this->db->where('id',$id_q)->update('tb_quotes',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui quotes !</div>');
			redirect(base_url('santri/quotes'));
		} elseif (isset($_POST['hapus'])){
			$id = $this->input->post('id');
			$this->db->where('id',$id)->delete('tb_quotes');
			$this->session->set_flashdata('sukses', '<div class="alert alert-danger">Berhasil menghapus quotes !</div>');
			redirect(base_url('santri/quotes'));
		}else {
			redirect(base_url('santri/quotes'));
		}
	
	}

}
