<?php
/**
 * 
 */
class Kelas {
	
    public $m_kelas_id;
    public $m_kelas_nama;
    public $m_kelas_lokasi;
    public $m_kelas_kapasitas;
    
    
    public function set_m_kelas_id($id)
    {
        $this->m_kelas_id=$id;
    }
    public function get_m_kelas_id()
    {
        return $this->m_kelas_id;
    }
    public function set_m_kelas_nama($nama)
    {
        $this->m_kelas_nama=$nama;
    }
    public function get_m_kelas_nama()
    {
        return $this->m_kelas_nama;
    }
    public function set_m_kelas_lokasi($lokasi)
    {
        $this->m_kelas_lokasi=$lokasi;
    }
    public function get_m_kelas_lokasi()
    {
        return $this->m_kelas_lokasi;
    }
    public function set_m_kelas_kapasitas($kapasitas)
    {
        $this->m_kelas_kapasitas=$kapasitas;
    }
    public function get_m_kelas_kapasitas()
    {
        return $this->m_kelas_kapasitas;
    }
    
}
