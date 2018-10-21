<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url_helper'));
        $this->load->library('form_validation');
        $this->load->database();
    }

    function index(){
		$data['header'] = $this->load->view('template/header'); 
		$data['main_body'] = $this->load->view('blank',$data);
		$this->load->view('template/index',$data); 
    }
}