<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 */
class Dosen {

    public $m_dosen_id;
    public $m_dosen_nip;
    public $m_dosen_nama;
    public $m_dosen_jk;
    public $m_dosen_telp;
    public $m_dosen_foto;
    public $m_dosen_alamat;
    public $m_dosen_email;


    public function set_m_dosen_id($id)
    {
        $this->m_dosen_id=$id;
    }
    
    public function get_m_dosen_id()
    {
        return $this->m_dosen_id;
    }
    public function set_m_dosen_nip($nip)
    {
        $this->m_dosen_nip=$nip;
    }
    
    public function get_m_dosen_nip()
    {
        return $this->m_dosen_nip;
    }
    
    public function set_m_dosen_nama($nama)
    {
        $this->m_dosen_nama=$nama;
    }
    
    public function get_m_dosen_nama()
    {
        return $this->m_dosen_nama;
    }
    
    public function set_m_dosen_jk($jk)
    {
        $this->m_dosen_jk=$jk;
    }
    
    public function get_m_dosen_jk()
    {
        return $this->m_dosen_jk;
    }
    
    public function set_m_dosen_telp($telp)
    {
        $this->m_dosen_telp=$telp;
    }
    
    public function get_m_dosen_telp()
    {
        return $this->m_dosen_telp;
    }
    
    public function set_m_dosen_foto($foto)
    {
        $this->m_dosen_foto=$foto;
    }
    
    public function get_m_dosen_foto()
    {
        return $this->m_dosen_foto;
    }
    public function set_m_dosen_alamat($alamat)
    {
        $this->m_dosen_alamat=$alamat;
    }
    
    public function get_m_dosen_alamat()
    {
        return $this->m_dosen_alamat;
    }
    public function set_m_dosen_email($email)
    {
        $this->m_dosen_email=$email;
    }
    
    public function get_m_dosen_email()
    {
        return $this->m_dosen_email;
    }
}
