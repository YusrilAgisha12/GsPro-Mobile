<?php

class Registrasi extends CI_Controller{
     public function index()
     {

        $this->form_validation->set_rules('nama','Nama','required', [
            'required' => ' nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('email','Email','required',[
            'required' => 'email wajib diisi!'
        ]);

        $this->form_validation->set_rules('password_1','Password','required|matches[password_2]', [
            'required' => 'password wajib diisi!',
            'matches'  => 'password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');

         if($this->form_validation->run() == FALSE) {
             $this->load->view('templates/header');
             $this->load->view('registrasi');
             $this->load->view('templates/footer');
         }else {
             $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'kelas'     => $this->input->post('kelas'),
                'kelamin'   => $this->input->post('kelamin'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,
             );

             $this->db->insert('tb_user',$data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, Akun sudah bisa digunakan. Silahkan Login !</div>');
             redirect('auth/login');
         }
     }
}