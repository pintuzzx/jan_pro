<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of signin
 *
 * @author https://www.roytuts.com
 */
class Signin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url_helper'));
        $this->load->library('form_validation');
        $this->load->database();
    }

    function index() {
        $data['title'] = 'Signin';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('signin', $data);
        } else {
            redirect('Signin/create');
        }
    }
    
    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }
    public function insert()
    {
        $this->load->view('template/header');
        $this->load->view('create');
        $this->load->view('template/footer');
    }
    public function ajax()
    {
        
        $data = array(
            'name' => $this->input->post('name'),
            //'name' => $this->input->post('name'),
            'class' => $this->input->post('class'),
            'role' => $this->input->post('role'),
            'sal' => $this->input->post('salary'),
            'pic' => $this->input->post('pic')
        );
        print_r($data);die;
        $result = $this->db->insert('emp_info', $data);
       return json_encode($result);
    }

}

/* End of file signin.php */
/* Location: ./application/modules/signin/controllers/signin.php */