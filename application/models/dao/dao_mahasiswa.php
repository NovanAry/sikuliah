<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @param Class DAO Mahasiswa \n
 *        mengambil object dari class Mahasiswa
 * 
 * @see pojo/mahasiswa.php
 */
class Dao_mahasiswa extends CI_Model{
	
    
    
    private $mhs;
    private $_TABEL_MAHASISWA=""; // nama tabel mahasiswa
    
    
    /*
     * Konstruktor mengambil object Mahasiswa dari pojo/mahasiswa.php
    */
	function __construct() {
	    parent::__construct();
        $this->load->model("pojo/mahasiswa");
    }
    
    /*
        @param get_property adalah fungsi percobaan
    */
    public function get_property(){
        $this->mhs=$this->mahasiswa;
        $this->mhs->set_m_mhs_id(1);
        return $this->mhs;
    }
    
    /*     
     * fungsi untuk menambahkan data Mahasiswa
        @param 
     *  $mhs adalah object class Mahasiswa
     *            
    */    
#   @override
    public function add($mhs)
    {
        // masukkan data berupa array                
        $this->db->insert((array)$data,$this->_TABEL_MAHASISWA);  
    }
    
#    @override
    public function edit($data){
        
    }
#    @override    
    public function delete($data){
        
    }
#    @override    
    public function get($identifier){
        
    }    
#    @override   
    public function getAll(){
        
    }
    
    
}

/*
 *	@file 
 *      model/dao/dao_mahasiswa.php
 *  
*/
