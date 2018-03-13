<?php
class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('front_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->home();
    }



    public function login()
    {
        $this->load->view('front/login');
    }

    public function LoginValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            echo "failed validation";
        }
        else
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $row = $this->front_model->get_mahasiswa_login($username,md5($password));

            if (!empty($row)) {
                //echo "login admin success! ";

                $this->load->helper('cookie');

                $cookie= array(
                 'name'   => 'frontCookie',
                 'value'  => $username,
                 'expire' => '0',
             );
                $this->input->set_cookie($cookie);

                echo "1";
            }else{
                echo "login failed";
            }

            //echo "<br>username: ".$data['username']."<br>";
            //echo "password: ".$data['password']."<br>";
        }
    }

    public function checkCookieMahasiswa()
    {
        $this->load->helper('cookie');
        if ($this->input->cookie('frontCookie',true)!=NULL) {
            return true;
        }else{
            return false;
        } 
    }

    public function home()
    {
        $this->load->view('templates/front/header');
        $this->load->view('templates/front/control');
        $this->load->view('templates/front/navbar');
        $this->load->view('front/home');
        $this->load->view('templates/front/JS');
        $this->load->view('templates/front/footer');
        
    }

    public function about()
    {
        $this->load->view('templates/front/header');
        $this->load->view('templates/front/control');
        $this->load->view('templates/front/navbar');
        $this->load->view('front/about');
        $this->load->view('templates/front/JS');
        $this->load->view('templates/front/footer');
        
    }

    public function search(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            $this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/search');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function confirmed(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            $this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/confirmed');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function detail(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            $this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/detail');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function payment(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            $this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/payment');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function status(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            $this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/status');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

}