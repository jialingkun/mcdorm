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
        //$this->load->view('templates/front/control');
        $this->load->view('templates/front/navbar');
        $this->load->view('front/home');
        $this->load->view('templates/front/JS');
        $this->load->view('templates/front/footer');
        
    }

    public function about()
    {
        $this->load->view('templates/front/header');
        //$this->load->view('templates/front/control');
        $this->load->view('templates/front/navbar');
        $this->load->view('front/about');
        $this->load->view('templates/front/JS');
        $this->load->view('templates/front/footer');
        
    }

    public function search(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            //$this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/search');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function getJumlahPesananKamar($idkamar){
        $data = $this->front_model->get_data_isikamar($idkamar);

        $count = 0;
        if ($data){
            foreach ($data as $row){
                date_default_timezone_set('Asia/Jakarta');
                $now = time();
                $expire = strtotime($row['kadaluarsa']);
                if ($now < $expire) {
                    $count = $count + 1;
                }
            }
        }
        return $count;
    }

    public function getAllKamar(){
        $data = $this->front_model->get_all_kamar();
        $result = [];
        foreach ($data as &$row){ //add & to call by reference
            //kuota dikurangi jumlah pemesan
            $row['kuota'] = $row['kuota'] - $this->getJumlahPesananKamar($row['id_kamar']);
            if ($row['kuota']>0) {
                $result[] = $row;
            }
        }
        if (empty($result)) {
            $result = NULL;
        }
        echo json_encode($result);
    }

    public function getSearch(){
        if ($this->input->post('fasilitaskos')) {
            $fasilitaskos = $this->input->post('fasilitaskos');
        }else{
            $fasilitaskos = NULL;
        }
        if ($this->input->post('fasilitaskamar')) {
            $fasilitaskamar = $this->input->post('fasilitaskamar');
        }else{
            $fasilitaskamar = NULL;
        }
        $harga = explode(';',$this->input->post('harga'));
        $gender = $this->input->post('gender');

        // echo $gender."<br>".$harga[0]."<br>".$harga[1]."<br>";
        // var_dump($fasilitaskos);

        $data = $this->front_model->get_search_kamar($gender,(int)$harga[0],(int)$harga[1]);

        $result = [];
        foreach ($data as &$row){ //add & to call by reference
            $dataFasilitasKos = explode(',',$row['fasilitas_kos']);
            $dataFasilitasKamar = explode(',',$row['fasilitas_kamar']);
            $fasilitasKosCocok = true;
            $fasilitasKamarCocok = true;
            if ($fasilitaskos!=NULL) {
                foreach ($fasilitaskos as $value) {
                    if (!in_array($value, $dataFasilitasKos)) {
                        $fasilitasKosCocok = false;
                    }
                }
            }
            
            if ($fasilitaskamar!=NULL){
                foreach ($fasilitaskamar as $value) {
                    if (!in_array($value, $dataFasilitasKamar)) {
                        $fasilitasKamarCocok = false;
                    }
                }
            }
            //kuota dikurangi jumlah pemesan
            $row['kuota'] = $row['kuota'] - $this->getJumlahPesananKamar($row['id_kamar']);
            if ($fasilitasKosCocok && $fasilitasKamarCocok && $row['kuota']>0) {
                $result[] = $row;
            }
        }
        if (empty($result)) {
            $result = NULL;
        }
        echo json_encode($result);
    }

    public function detail(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            //$this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/detail');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function getDetail($idkos,$kamar = NULL){
        if ($kamar == NULL) {
            $data = $this->front_model->get_data_kos($idkos,'user_kos');
        }else{
            $data = $this->front_model->get_data_kos($idkos, 'kamar');
            foreach ($data as &$row){ //add & to call by reference
                //kuota dikurangi jumlah pemesan
                $row['kuota'] = $row['kuota'] - $this->getJumlahPesananKamar($row['id_kamar']);
            }
        }

        if (empty($data))
        {
            show_404();
        }

        echo json_encode($data);
    }


    public function order($idmahasiswa){
        date_default_timezone_set('Asia/Jakarta');
        $kadaluarsa = date("Y-m-d H:i:s", strtotime('+24 hours'));

        $data = array(
            'status' => 'Belum Bayar',
            'id_kos' => $this->input->post('idkos'),
            'id_kamar' => $this->input->post('idkamar'),
            'tanggal_masuk' => $this->input->post('tanggalmasuk'),
            'kadaluarsa' => $kadaluarsa
        );

        $insertStatus = $this->front_model->update_mahasiswa($data,$idmahasiswa);
        echo $insertStatus;
    }

    public function payment(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            //$this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/payment');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function uploadImagePayment($idmahasiswa){
        $ds          = DIRECTORY_SEPARATOR;
        $targetPath = getcwd().$ds.'photos'.$ds.$idmahasiswa.$ds;
        $filename = 'slotpayment';

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0755, true);
        }

        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetFile =  $targetPath. $filename;
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            //image resize
            $maxWidth = 1024;
            list($width, $height, $type, $attr) = getimagesize($tempFile);
            if ($width > $maxDim) {
                $ratio = $width/$height;
                $new_width = $maxWidth;
                $new_height = $maxWidth/$ratio;
            }else{
                $new_width = $width;
                $new_height = $height;
            }
            $src = imagecreatefromstring(file_get_contents($tempFile));
            $dst = imagecreatetruecolor($new_width,$new_height);
            imagecopyresampled($dst,$src,0,0,0,0,$new_width,$new_height,$width,$height);
            imagedestroy($src);
            imagejpeg($dst, $tempFile, 100);
            imagedestroy($dst);

            move_uploaded_file($tempFile,$targetFile.".jpg");
        }
    }

    public function confirmed(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            //$this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/confirmed');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function status(){
        if ($this->checkCookieMahasiswa()) {
            $this->load->view('templates/front/header');
            //$this->load->view('templates/front/control');
            $this->load->view('templates/front/navbar');
            $this->load->view('front/status');
            $this->load->view('templates/front/JS');
            $this->load->view('templates/front/footer');
        }else{
            $this->login();
        }
    }

    public function getmahasiswa($id)
    {
        $data = $this->front_model->get_mahasiswa($id);

        if (empty($data))
        {
            show_404();
        }else{
            unset($data['password']);
            if ($data['status']=="Belum Bayar") {
                date_default_timezone_set('Asia/Jakarta');
                $now = time();
                $expire = strtotime($data['kadaluarsa']);
                if ($now >= $expire) {
                    $data['status'] = 'Expired';
                }
            }
        }

        echo json_encode($data);
    }


    // public function getAllImagePath($idkos){
    //     $targetPath = base_url().'photos';
    //     $targetPath = $targetPath.'/'.$idkos.'/';
    //     $maxslot = 10;
    //     $data = [];
    //     for ($i=1; $i <= $maxslot; $i++) { 
    //         $filepath = $targetPath."slot".$i.".jpg";
    //         if (@getimagesize($filepath)) {
    //             $data[] = $filepath;
    //         }
    //     } 
    //     echo json_encode($data);
    // }

}