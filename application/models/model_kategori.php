<?php

class Model_kategori extends CI_Model{
    
    public function data_makanan()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'makanan'));
    }

    public function data_minuman()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'minuman'));
    }

    public function data_perlengkapan_sekolah()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'perlengkapan sekolah'));
    }

    public function data_obat_obatan()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'obat obatan'));
    }

    public function data_perlengkapan_rumah()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'perlengkapan rumah'));
    }

    public function data_ice_cream()
    {
        return $this->db->get_where('tb_barang',array('kategori' =>'ice cream'));
    }

}