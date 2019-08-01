<?php
class User extends CI_Controller
{
    //TO-DO
    //http://sab99r.com/blog/codeigniter-is-logged-in/
    
    
    public function index(){
    	//Loaded this library to be used in the view for name attributes
    	$this->load->library('Reg_frm_names', NULL, 'reg_frm');
    	$this->load->helper('form');
        $this->load->view("user/registration");
    }
    
    public function get_data($type){
        $this->load->model('candidates');
        switch ($type) {
            case 'gender':
                $result = $this->candidates->get_gender_types();
                break;
            case 'state':
                $result = $this->candidates->get_states();
                break;
            default:
                break;
        }

        header('Content-Type:application/json');
        echo json_encode($result);
    }
}

?>