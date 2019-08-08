<?php
class Candidates extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_gender_types(){
        return $this->db->query("SELECT `id`, `gender_type` FROM genders")->result();
    }

    public function get_states()
    {
    	return $this->db->query("SELECT `id`, `name` FROM states ORDER BY `name` ASC")->result();
    }

    public function get_categories()
    {
        return $this->db->query("SELECT `id`, `cat_type` FROM category")->result();
    }

    public function get_pwd_types(){
        return $this->db->query("SELECT `id`, `details` FROM `pwd_types`")->result();
    }

}