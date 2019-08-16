<?php 

/**
 * @author Nayan
 *
 *	This class is represents all the name attributes
 */
class Reg_frm_names {

    const C_FNAME = 'c_fname';
    const C_MNAME = 'c_mname';
    const C_LNAME = 'c_lname';
    const F_FNAME = 'f_fname';
    const F_MNAME = 'f_mname';
    const F_LNAME = 'f_lname';
    const M_FNAME = 'm_fname';
    const M_MNAME = 'm_mname';
    const M_LNAME = 'm_lname';
    const GENDER  = 'gender';
    const DOB	= 'dob';
    const COMM	= 'comm';
    const STATE = 'state';
    const BIRTH = 'birth';
    const NATION = 'nation';
    const PWD = 'pwd';
    const PWD_CAT = 'pwd_cat';
    const PWD_PER = 'pwd_per';
    const MOBILE = 'mobile_no';
    const EMAIL = 'email';
    const RE_EMAIL = 're_email';
    const PASS	= 'password';
    const RE_PASS = 're_pass';
    const CAPTCHA = 'captcha';
    
    
    public function c_fname()
    {
        return self::C_FNAME;
    }
    
    public function c_mname(){
    	return self::C_MNAME;
    }
    
    public function c_lname(){
    	return self::C_LNAME;
    }
    
    public function f_fname()
    {
    	return self::F_FNAME;
    }
    
    public function f_mname(){
    	return self::F_MNAME;
    }
    
    public function f_lname(){
    	return self::F_LNAME;
    }
    
    public function m_fname()
    {
    	return self::M_FNAME;
    }
    
    public function m_mname(){
    	return self::M_MNAME;
    }
    
    public function m_lname(){
    	return self::M_LNAME;
    }
    
    public function gender(){
        return self::GENDER;
    }
    
    public function dob(){
        return self::DOB;
    }
    
    public function comm(){
        return self::COMM;
    }
    
    public function state(){
        return self::STATE;
    }
    
    public function pob(){
        return self::BIRTH;
    }
    
    public function nation(){
        return self::NATION;
    }
    
    public function pwd(){
        return self::PWD;
    }
    
    public function pwd_cat(){
        return self::PWD_CAT;
    }
    
    public function pwd_per(){
        return self::PWD_PER;
    }
    
    public function mobile(){
        return self::MOBILE;
    }
    
    public function email(){
        return self::EMAIL;
    }
    
    public function re_email(){
        return self::RE_EMAIL;
    }
    
    public function password(){
        return self::PASS;
    }
    
    public function re_password(){
        return self::RE_PASS;
    }
    
    public function captcha(){
        return self::CAPTCHA;
    }

    public function get_fname_rules($field_name)
    {
        return array(
            'field' => $field_name,
            'label' => 'First Name',
            'rules' => 'required|alpha_numeric_spaces|max_length[50]'
        );
    }

    public function get_mname_rules($field_name)
    {
        return array(
            'field' => $field_name,
            'label' => 'Middle Name',
            'rules' => 'alpha_numeric_spaces|max_length[50]'
        );
    }

    public function get_lname_rules($field_name)
    {
        return array(
            'field' => $field_name,
            'label' => 'Last Name',
            'rules' => 'required|alpha_numeric_spaces|max_length[50]'
        );
    }

    public function get_gender_rules()
    {
        return array(
            'field' => self::GENDER,
            'label' => 'Gender',
            'rules' => 'required|alpha'
        );
    }

    public function get_dob_rules()
    {
        return array(
            'field' => self::DOB,
            'label' => 'Date of Birth',
            'rules' => 'required|alpha_dash'
        );
    }

    public function get_category_rules()
    {
        return array(
            'field' => self::COMM,
            'label' => 'Category',
            'rules' => 'required|alpha'
        );
    }

    public function get_state_rules()
    {
        return array(
            'field' => self::STATE,
            'label' => 'State',
            'rules' => 'required|alpha'
        );
    }

    public function get_pob_rules()
    {
        return array(
            'field' => self::BIRTH,
            'label' => 'Place of Birth',
            'rules' => 'alpha_numeric_spaces'
        );
    }

    public function get_nation_rules()
    {
        return array(
            'field' => self::NATION,
            'label' => 'Nationality',
            'rules' => 'required|alpha'
        );
    }

    public function get_mobile_rules()
    {
        return array(
            'field' => self::MOBILE,
            'label' => 'Mobile Number',
            'rules' => 'required|numeric|max_length[10]'
        );
    }

    public function get_email_rules()
    {
        //To-DO Isunique email
        return array(
            'field' => self::EMAIL,
            'label' => 'e-mail ID',
            'rules' => 'required|valid_email'
        );
    }

    public function get_confirm_email_rules()
    {
        return array(
            'field' => self::RE_EMAIL,
            'label' => 'e-mail Confirmation',
            'rules' => 'required|matches['. self::EMAIL .']'
        );
    }

    public function get_password_rules()
    {
        return array(
            'field' => self::PASS,
            'label' => 'Password',
            'rules' => 'required'
        );
    }

    public function get_confirm_pass_rules()
    {
        return array(
            'field' => self::RE_PASS,
            'label' => 'Password Confirmation',
            'rules' => 'required|matches['. self::PASS .']'
        );
    }
}

?>