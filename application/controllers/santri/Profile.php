<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->db->where('id_pengguna',$this->session->userdata('id'))->get('tb_pengguna')->row_array();
		$data['artikel'] = $this->db->where('id_user',$this->session->userdata('id'))->count_all_results('tb_berita');
		$this->load->view('santri/profile/index',$data);
	}

	public function update(){
		$config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/pengguna/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
            if ($fotolama != 'default.jpg') {
                unlink(FCPATH . './uploads/pengguna/' . $fotolama);
            }
            $fotobaru = $this->upload->data('file_name');
            $this->db->set('foto', $fotobaru);
        } else {
            $this->upload->display_errors();
        }
		$id = $this->session->userdata('id');
        $data = [
            'nama'			=> $this->input->post('nama'),
			'email'			=> $this->input->post('email'),
			'username'		=> $this->input->post('username'),
        ];
        $this->db->where('id_pengguna',$id)->update('tb_pengguna',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui profile !</div>');
        redirect(base_url('santri/profile'));
	}

	public function password(){
		$id = $this->session->userdata('id');
		$password = md5($this->input->post('password_lama'));
		$auth = $this->db->query("SELECT * FROM tb_pengguna where id_pengguna='$id' and password='$password'");
		if ($auth->num_rows() > 0){
			$data = [
				'password'		=> md5($this->input->post('password_baru')),
			];
			$this->db->where('id_pengguna',$id)->update('tb_pengguna',$data);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Password Berhasil diubah !</div>');
			redirect(base_url('santri/profile'));
		}else {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Password lama salah !</div>');
			redirect(base_url('santri/profile'));
		}

	}
}
