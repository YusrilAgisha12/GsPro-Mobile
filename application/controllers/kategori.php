<?php

class Kategori extends CI_Controller{
    public function makanan()
    {
        $data['makanan'] = $this->model_kategori->data_makanan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan',$data);
        $this->load->view('templates/footer');
    }

    public function minuman()
    {
        $data['minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman',$data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_sekolah()
    {
        $data['perlengkapan_sekolah'] = $this->model_kategori->data_perlengkapan_sekolah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_sekolah',$data);
        $this->load->view('templates/footer');
    }

    public function obat_obatan()
    {
        $data['obat_obatan'] = $this->model_kategori->data_obat_obatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('obat_obatan',$data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_rumah()
    {
        $data['perlengkapan_rumah'] = $this->model_kategori->data_perlengkapan_rumah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_rumah',$data);
        $this->load->view('templates/footer');
    }

    public function ice_cream()
    {
        $data['ice_cream'] = $this->model_kategori->data_ice_cream()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ice_cream',$data);
        $this->load->view('templates/footer');
    }
}