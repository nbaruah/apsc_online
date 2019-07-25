<?php
class User extends CI_Controller
{
    
    
    
    public function index(){
    	//Loaded this library to be used in the view for name attributes
    	$this->load->library('Reg_frm_names', NULL, 'reg_frm');
    	$this->load->helper('form');
        $this->load->view("user/registration");
    }
    
    public function register(){
       echo 'welcome';
    }
}

?>