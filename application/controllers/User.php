<?php
/**
 *
 * @author nbaruah
 *        
 */
class User extends CI_Controller
{
    public function __construct(){
        $this->load->helper("html");
    }
    
    public function index(){
        $this->load->view("user/registration");
    }
}

