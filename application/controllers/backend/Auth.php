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
						'nama'    		=> $user['nama'],
						'username'         => $username,
						'foto'          => $user['foto'],
						'id'       		=> $user['id'],
						'role'          => $user['role'],
						'status'		=> 'login',
					);
					$this->session->set_userdata( $data_sess );
					redirect(base_url('admin'));
				} else {
					$data_sess = array(
						'nama'    		=> $user['nama'],
						'username'      => $username,
						'foto'          => $user['foto'],
						'id'       		=> $user['id'],
						'role'          => $user['role'],
						'status'		=> 'login',
					);
					$this->session->set_userdata( $data_sess );
					redirect(base_url('santri'));
				}
            }else {
                $this->session->set_flashdata('alert','<div class="alert alert-warning">Username atau Kata Sandi Salah !</div>');
                redirect(base_url('login'));
        	}
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
        
                            