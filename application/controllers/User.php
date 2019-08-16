<?php
class User extends CI_Controller
{
    //TO-DO
    //http://sab99r.com/blog/codeigniter-is-logged-in/
    
    public function __construct()
    {
        parent::__construct();
        //Loaded this custom library to get uniform field names 
        $this->load->library('Reg_frm_names', NULL, 'reg_frm');
        //Load all the required Libraries and helpers
        $this->load->helper('form');
        $this->load->library('form_validation');
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
        //configure validation rules in an array
        $validation_rules = array(
            $this->reg_frm->get_fname_rules($this->reg_frm->c_fname()),
            $this->reg_frm->get_mname_rules($this->reg_frm->c_mname()),
            $this->reg_frm->get_lname_rules($this->reg_frm->c_lname()),
            $this->reg_frm->get_fname_rules($this->reg_frm->f_fname()),
            $this->reg_frm->get_mname_rules($this->reg_frm->f_mname()),
            $this->reg_frm->get_lname_rules($this->reg_frm->f_lname()),
            $this->reg_frm->get_fname_rules($this->reg_frm->m_fname()),
            $this->reg_frm->get_mname_rules($this->reg_frm->m_mname()),
            $this->reg_frm->get_lname_rules($this->reg_frm->m_lname()),
            $this->reg_frm->get_gender_rules(),
            $this->reg_frm->get_dob_rules(),
            $this->reg_frm->get_category_rules(),
            $this->reg_frm->get_state_rules(),
            $this->reg_frm->get_pob_rules(),
            $this->reg_frm->get_nation_rules(),
            $this->reg_frm->get_mobile_rules(),
            $this->reg_frm->get_email_rules(),
            $this->reg_frm->get_confirm_email_rules(),
            $this->reg_frm->get_password_rules(),
            $this->reg_frm->get_confirm_pass_rules()
        );
        $this->form_validation->set_rules($validation_rules);
        
        //set error delimiter Globally
        $this->form_validation->set_error_delimiters('<small class="small text-danger font-italic">', '</small>');

        //run validation rules
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/registration');
            //redirect('/user/');
        } else {
            echo 'Successfully submitted';
        }
        
    }

    public function test(){
        
        $rule_set_1 = array('fname'=>'Nayan', 'mname'=>'Mani', 'lname'=>'Baruah', 'age'=>29);
        $rule_set_2 = array('fname'=>'Gitashree', 'mname'=>'Devi', 'lname'=>'Baruah', 'age'=>24);
        $rule_set = array($rule_set_1, $rule_set_2);
     /*   $rule_set['field'] = "fname";
        $rule_set['label'] = "Father's Name";
        $rule_set['rule']  = "required";*/

        echo "<pre>";
        print_r($rule_set);
    }
}

?>