<?php

class Kategori extends CI_Controller
{
    public function data_makanan()
    {
        $data['data_makanan'] = $this->model_kategori->data_makanan()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data_minuman()
    {
        $data['data_minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_minuman', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data_perlengkapan_sekolah()
    {
        $data['data_perlengkapan_sekolah'] = $this->model_kategori->data_perlengkapan_sekolah()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_perlengkapan_sekolah', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data_obat_obatan()
    {
        $data['data_obat_obatan'] = $this->model_kategori->data_obat_obatan()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_obat_obatan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data_perlengkapan_rumah()
    {
        $data['data_perlengkapan_rumah'] = $this->model_kategori->data_perlengkapan_rumah()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_perlengkapan_rumah', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data_ice_cream()
    {
        $data['data_ice_cream'] = $this->model_kategori->data_ice_cream()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_ice_cream', $data);
        $this->load->view('templates_admin/footer');
    }
}
