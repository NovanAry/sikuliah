<?php
/**
 * 
 */
class Matakuliah {
	
	public $m_matkul_id;
    public $m_matkul_kode;
    public $m_matkul_nama;
    public $m_matkul_semester;
    public $m_matkul_sks;
    
    
    public function set_m_matkul_id($id)
    {
        $this->m_matkul_id=$id;
    }    
    public function get_m_matkul_id()
    {
        return $this->m_matkul_id;
    }
    public function set_m_matkul_kode($kode)
    {
        $this->m_matkul_kode=$kode;
    }    
    public function get_m_matkul_kode()
    {
        return $this->m_matkul_kode;
    }public function set_m_matkul_nama($nama)
    {
        $this->m_matkul_nama=$nama;
    }    
    public function get_m_matkul_nama()
    {
        return $this->m_matkul_nama;
    }public function set_m_matkul_semester($semester)
    {
        $this->m_matkul_semester=$semester;
    }    
    public function get_m_matkul_semester()
    {
        return $this->m_matkul_semester;
    }public function set_m_matkul_sks($sks)
    {
        $this->m_matkul_sks=$sks;
    }    
    public function get_m_matkul_sks()
    {
        return $this->m_matkul_sks;
    }
    
}
