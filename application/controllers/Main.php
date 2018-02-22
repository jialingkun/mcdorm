<?php
class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        echo "empty";
    }



    public function login()
    {

        $this->load->view('main/login');
        
    }

    public function LoginValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('fname','First Name', 'required');
        $this->form_validation->set_rules('lname','Last Name', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            echo validation_errors();
        }
        else
        {
            // To who are you wanting with input value such to insert as 
          $data['frist_name']=$this->input->post('fname');
          $data['last_name']=$this->input->post('lname');
          $data['user_name']=$this->input->post('email');
            // Then pass $data  to Modal to insert bla bla!!
      }
  }
}