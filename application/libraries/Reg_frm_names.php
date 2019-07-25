<?php 

/**
 * @author Nayan
 *
 *	This class is represents all the name attributes
 */
class Reg_frm_names {
    const C_FNAME = 'c_fname';
    const C_MNAME = 'c_mname';
    const C_LNAME = 'c_lnameyyyyyyyyyyyyy';
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
    
    
    public function get_c_fname()
    {
        return self::C_FNAME;
    }
    
    public function get_c_mname(){
    	return self::C_MNAME;
    }
    
    public function get_c_lname(){
    	return self::C_LNAME;
    }
    
    public function get_f_fname()
    {
    	return self::F_FNAME;
    }
    
    public function get_f_mname(){
    	return self::F_MNAME;
    }
    
    public function get_f_lname(){
    	return self::F_LNAME;
    }
    
    public function get_m_fname()
    {
    	return self::M_FNAME;
    }
    
    public function get_m_mname(){
    	return self::M_MNAME;
    }
    
    public function get_m_lname(){
    	return self::M_LNAME;
    }
    
}

?>