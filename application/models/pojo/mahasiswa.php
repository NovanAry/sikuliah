<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Mahasiswa Plain Object
 */
class Mahasiswa {
	
    public $m_mhs_id;
    public $m_mhs_nim;
    public $m_mhs_nama;
    public $m_mhs_umur;
    public $m_mhs_jk;    
    public $m_mhs_contact;
    public $m_mhs_alamat;
    public $m_mhs_email;
    public $m_mhs_semester;
    public $m_mhs_foto;
    
    
    //      nothing goes here    
	function __construct() {}
    
    /*
        getter and setter start here
    */
    public function set_m_mhs_id($id)
    {
        $this->m_mhs_id=$id;
    }
    
    public function get_m_mhs_id()
    {
        return $this->m_mhs_id;
    }
    
    public function set_m_mhs_nim($nim)
    {
        $this->m_mhs_nim=$nim;
    }
    
    public function get_m_mhs_nim()
    {
        return $this->m_mhs_nim;
    }
    
    public function set_m_mhs_nama($nama)
    {
        $this->m_mhs_nama=$nama;
    }
    
    public function get_m_mhs_nama()
    {
        return $this->m_mhs_nama;
    }
    
    public function set_m_mhs_umur($umur)
    {
        $this->m_mhs_umur=$umur;
    }
    
    public function get_m_mhs_umur()
    {
        return $this->m_mhs_umur;
    }
    public function set_m_mhs_jk($jk)
    {
        $this->m_mhs_jk=$jk;
    }
    
    public function get_m_mhs_jk()
    {
        return $this->m_mhs_jk;
    }
    
    public function set_m_mhs_contact($contact)
    {
        $this->m_mhs_contact=$contact;
    }
    
    public function get_m_mhs_contact()
    {
        return $this->m_mhs_contact;
    }
    
    public function set_m_mhs_alamat($alamat)
    {
        $this->m_mhs_alamat=$alamat;
    }
    
    public function get_m_mhs_alamat()
    {
        return $this->m_mhs_alamat;
    }
    public function set_m_mhs_email($email)
    {
        $this->m_mhs_email=$email;
    }
    
    public function get_m_mhs_email()
    {
        return $this->m_mhs_email;
    }
    public function set_m_mhs_semester($semester)
    {
        $this->m_mhs_semester=$semester;
    }
    
    public function get_m_mhs_semester()
    {
        return $this->m_mhs_semester;
    }
    public function set_m_mhs_foto($foto)
    {
        $this->m_mhs_foto=$foto;
    }
    
    public function get_m_mhs_foto()
    {
        return $this->m_mhs_foto;
    }
}