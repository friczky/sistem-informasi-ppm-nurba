<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login(){
      
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));

        $data = $this->db->query("SELECT * FROM tb_pengguna where username='$username' and password='$password'");

        if ($data->num_rows() > 0) {
                $user = $data->row_array();
                if ($user['role'] == '0') {
					$data_sess = array(
						'id'       		=> $user['id_pengguna'],
						'role'          => $user['role']
					);
					$this->session->set_userdata( $data_sess );
					redirect(base_url('admin'));
				} else {
					$data_sess = array(
						'id'       		=> $user['id_pengguna'],
						'role'          => $user['role'],
					);
					$this->session->set_userdata( $data_sess );
					redirect(base_url('santri'));
				}
            }else {
                $this->session->set_flashdata('alert','<div class="alert alert-warning">Username atau Kata Sandi Salah !</div>');
                redirect(base_url('login'));
        	}
    }

	public function register(){
		$data = $this->db->get('tb_pengaturan_pendaftaran')->row_array();
		if ($data['status'] == '1') {
			$this->load->view('auth/register');
		} else {
			$this->session->set_flashdata('alert','<div class="alert alert-warning">Pendaftaran Belum Dibuka !</div>');
			redirect(base_url('login'));
		}
	}
		

	public function store(){
		$data = [
			'nama'	=> $this->input->post('nama_lengkap'),
			'email'	=> $this->input->post('mail'),
			'username'	=> $this->input->post('uname'),
			'password'	=> md5($this->input->post('pwd')),
			'role'	=> '1'
		];

		$this->db->insert('tb_pengguna', $data);
		$this->session->set_flashdata('alert','<div class="alert alert-success">Berhasil Daftar, Silahkan Masuk !</div>');
		redirect(base_url('login'));
	}

    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('alert','<div class="alert alert-warning">Berhasil logout !</div>');
        redirect(base_url('login'));
        
    }

	public function reset_password(){
		if(isset($_POST['reset'])) {
			$data = [
				'email' 	=> $this->input->post('email'),
				'token'		=> random_bytes(20),
			];
		}else{   
			$from = "friczky@friczky.com";    
			$to = "friczky@gmail.com";    
			$subject = "Checking PHP mail";    
			$message = "PHP mail berjalan dengan baik";   
			$headers = "From:" . $from;    
			mail($to,$subject,$message, $headers);    
			echo "Pesan email sudah terkirim.";
		}
	}
}
        
    /* End of file  Login.php */
        
                            