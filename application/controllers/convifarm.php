<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convifarm extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
      
    }
    
    public function _load_view(){
                $this->load->view('templates/tmp',$this->data);
	}
        
    public function index()
	{
		$this->home();
	}
        
    public function home()
        {
            $this->data['title'] = 'ConviFarm | KilimoRahisi';
            $this->data['content'] = 'signin';
		$this->signin();
            //$this->_load_view();
        }
        
    public function signin(){
        $this->data['title'] = 'ConviFarm | KilimoRahisi';
        
        $this->load->view('signin');
    }
    
    public function signup() {
        
        $this->load->view('signup');
    }
}
