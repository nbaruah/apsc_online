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
            case 'genders':
                $result = $this->candidates->get_gender_types();
                break;
            case 'states':
                $result = $this->candidates->get_states();
                break;
            case 'categories':
                $result = $this->candidates->get_categories();
                break;
            default:
                //$result = array("stat_code" => 404, "err_msg" => "The page you are looking for not found");
                break;
        }

        header('Content-Type:application/json');
        echo json_encode($result);
    }
}

?>