<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'conpasdev@gmail.com',  // Email gmail
            'smtp_pass'   => 'zvry yhbk aerd tigl',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $email = $this->input->post('email');
        $pesan = 
        '
        <h1> RESET PASSWORD '.$email.'</h1>
        Klik link dibawah ini untuk reset passsword. <br><br>
        '.
        '
        <a href="'.base_url('backend/auth/lupa_password').'">
        Klik Disini</a>
        <br><br>

        <p><b>PPM NUR BAITURRAHMAN</b></p>
        ';
        
        if (isset($_POST['reset'])){
            $this->load->library('email', $config);
            $this->email->from('ppmnurba@gmail.com', 'PPM NUR BAITURRAHMAN'); 
            $this->email->to($email); 
            $this->email->attach('');
            $this->email->subject('Reset Password | PPM NURBA');
            $this->email->message($pesan);
            if ($this->email->send()) {
                $this->session->set_flashdata('alert','<div class="alert alert-success">Berhasil Mengirim Email Reset Password !</div>');
                redirect(base_url('login'));
            } else {
                $this->session->set_flashdata('alert','<div class="alert alert-danger">Gagal Mengirim Email Reset Password, Kesalahan Server !</div>');
                redirect(base_url('login'));
            }
        }else{

        }
    }

    public function register(){
        // Konfigurasi email
        $email = $this->input->post('mael') ;
        $username = $this->input->post('username') ;
        $password = $this->input->post('psswd') ;
        $pesan = 
        '
        <h1> PENDAFTARAN AKUN BERHASIL '.$email.'</h1>
        Berikut akun anda untuk login di website PPM NUR BAITURRAHMAN. <br><br>
        <p> Username : <b>'.$username.'</b></p>
        <p> Password : <b>'.$password.'</b></p>
        <br>
        <p> Silahkan Login melalui link ini : <a href="'.base_url().'">Klik Disini</a><p>
        <br><br>
        <p><b>PPM NUR BAITURRAHMAN</b></p>
        ';
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'conpasdev@gmail.com',  // Email gmail
            'smtp_pass'   => 'zvry yhbk aerd tigl',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        if (isset($_POST['daftar'])){
            $this->load->library('email', $config);
            $this->email->from('conpasdev@gmail.com', 'PPM NUR BAITURRAHMAN'); 
            $this->email->to($email); 
            // $this->email->attach('');
            $this->email->subject('Pendaftaran Akun Berhasil | PPM NURBA');
            $this->email->message($pesan);
            if ($this->email->send()) {
                $this->session->set_flashdata('alert','<div class="alert alert-success">Berhasil Mendaftarkan Akun !</div>');
                redirect(base_url('login'));
            } else {
                $this->session->set_flashdata('alert','<div class="alert alert-danger">Pendaftaran Berhasil , Namun Email tidak terkirim, Kesalahan Server !</div>');

                redirect(base_url('login'));
            }
        }else{}
    }
}