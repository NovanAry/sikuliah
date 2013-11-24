<?php
/**
 * 
 */
class Tahun_ajar {
	
	public $mta_id;
    public $mta_awal;
    public $mta_akhir;
    public $mta_status;
    
    
    public function set_mta_id($id)
    {
        $this->mta_id=$id;
    }
    
    public function get_mta_id()
    {
        return $this->mta_id;
    }
    public function set_mta_awal($awal)
    {
        $this->mta_awal=$awal;
    }
    
    public function get_mta_awal()
    {
        return $this->mta_awal;
    }
    public function set_mta_akhir($akhir)
    {
        $this->mta_akhir=$akhir;
    }
    
    public function get_mta_akhir()
    {
        return $this->mta_akhir;
    }
    public function set_mta_status($status)
    {
        $this->mta_status=$status;
    }
    
    public function get_mta_status()
    {
        return $this->mta_status;
    }
    
    
}
