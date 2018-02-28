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

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            echo "failed validation";
        }
        else
        {

            $data['username']=$this->input->post('username');
            $data['password']=$this->input->post('password');

            $data['admin'] = $this->main_model->get_admin_login();

            if ($data['username']==$data['admin']['id_admin'] && md5($data['password']) == $data['admin']['password']) {
                //echo "login admin success! ";

                $this->load->helper('cookie');

                $cookie= array(
                 'name'   => 'backendCookie',
                 'value'  => md5($data['admin']['id_admin']),
                 'expire' => '0',
             );
                $this->input->set_cookie($cookie);
                //echo "Session created : ";
                //$this->getcookieAdmin();

                echo "1";
            }else{
                echo "login failed";
            }

            //echo "<br>username: ".$data['username']."<br>";
            //echo "password: ".$data['password']."<br>";
        }
    }

    function getcookieAdmin()
    {
        $this->load->helper('cookie');
        echo $this->input->cookie('backendCookie',true);
    }

    public function home()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/home');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function manajemen_mahasiswa_data(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_mahasiswa_data');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function getmahasiswa($id = NULL)
    {
        $data = $this->main_model->get_data_mahasiswa($id);

        if (empty($data))
        {
            show_404();
        }

        echo json_encode($data);
    }

    public function manajemen_mahasiswa_insert(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_mahasiswa_insert');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function insertMahasiswa(){
        $data = array(
            'id_mahasiswa' => $this->input->post('id'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'notelp' => $this->input->post('notelp'),
            'status' => "baru",
            'id_kos' => NULL,
            'id_kos' => NULL,
            'tanggal_masuk' => NULL,
            'kadaluarsa' => NULL
        );

        $insertStatus = $this->main_model->insert_new_mahasiswa($data);
        echo $insertStatus;
    }

    public function manajemen_mahasiswa_edit(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_mahasiswa_edit');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function manajemen_kos_data(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_kos_data');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function manajemen_kos_edit(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_kos_edit');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function manajemen_kos_insert(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_kos_insert');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

    public function manajemen_kos_kamar(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('main/manajemen_kos_kamar');
        $this->load->view('templates/JS');
        $this->load->view('templates/footer');
    }

}