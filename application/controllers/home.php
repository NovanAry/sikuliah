<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller {
	
    
    /*
        tester
    */
    
	function index()
    {
        $this->load->model("dao/dao_mahasiswa");
        $data["mahasiswa"]=$this->dao_mahasiswa->get_property();        
        $this->load->view("home_view",$data);
    }
}