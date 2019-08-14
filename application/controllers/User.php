<?php
class User extends CI_Controller
{
    //TO-DO
    //http://sab99r.com/blog/codeigniter-is-logged-in/
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        //Loaded this library to be used in the view for name attributes
        $this->load->library('Reg_frm_names', NULL, 'reg_frm');
        $this->load->helper('form');
    }
    
    public function index(){
        $this->load->view("user/registration");
    }
    
    public function get_data($type){
        $this->load->model('candidates');
        $result=NULL;
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
            case 'pwd_types':
                $result = $this->candidates->get_pwd_types();
                break;
            default:
                //$result = array("stat_code" => 404, "err_msg" => "The page you are looking for not found");
                break;
        }

        header('Content-Type:application/json');
        echo json_encode($result);
    }

    public function register(){
        echo $this->reg_frm->f_fname();
    }
}

?>