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
    	return $this->db->query("SELECT `id`, `name` FROM states")->result();
    }

}