<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
/* 	    $config = Array(
	        'protocol' => 'smtp',  // The mail sending protocol.
	        'smtp_host' => 'ssl://smtp.googlemail.com',    // SMTP Server Address for Gmail.
	        'smtp_port' => 465,
	        'smtp_user' => 'assampsc@gmail.com',
	        'smtp_pass' => 'Gmail@apsc22'
	        ); */

	    $config = Array(
	        'protocol' => 'smtp',  // The mail sending protocol.
	        'smtp_host' => 'smtp-relay.sendinblue.com',    // SMTP Server Address for Gmail.
	        'smtp_port' => 587,
	        'smtp_user' => 'assampsc@gmail.com',
	        'smtp_pass' => 'CRnwsKQ9pbALJHNZ'
	        );
	    
	    $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    
	    // Set to, from, message, etc.
	    // Sender email address
	    $this->email->from('assampsc@gmail.com', 'assampsc');
	    // Receiver email address.for single email
	    $this->email->to('nayanmanibaruah@gmail.com');
	    //send multiple email
	    //$this->email->to(abc@gmail.com,xyz@gmail.com,jkl@gmail.com);
	    
	    // Subject of email
	    $this->email->subject('APSC Account Activation');
	    
	    // Message in email
	    $this->email->message('Your Registration is complete');
	    
	    // It returns boolean TRUE or FALSE based on success or failure
	    $this->email->send(FALSE);
	    
	    // Will only print the email headers, excluding the message subject and body
	    echo $this->email->print_debugger();
	    
/* 	    if ($result) {
	        echo 'Email Successfully Send !';
	    } else {
	        echo 'Failed';
	    } */
	}
	
	public function test_email(){
	    $this->load->library('email');
	    
	    $config['protocol']    = 'smtp';
	    $config['smtp_host']    = 'ssl://smtp.gmail.com';
	    $config['smtp_port']    = '465';
	    $config['smtp_timeout'] = '7';
	    $config['smtp_user']    = 'sender_mailid@gmail.com';
	    $config['smtp_pass']    = 'password';
	    $config['charset']    = 'utf-8';
	    $config['newline']    = "\r\n";
	    $config['mailtype'] = 'text'; // or html
	    $config['validation'] = TRUE; // bool whether to validate email or not
	    
	    $this->email->initialize($config);
	    
	    $this->email->from('sender_mailid@gmail.com', 'sender_name');
	    $this->email->to('recipient@gmail.com');
	    $this->email->subject('Email Test');
	    $this->email->message('Testing the email class.');
	    
	    $this->email->send();
	    
	    echo $this->email->print_debugger();
	}
}
