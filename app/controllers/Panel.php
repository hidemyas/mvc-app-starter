<?php

class Panel extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // Oturum Kontrolü
        Sesion::checkSesion();

    }

    public function index(){
        $this->home();
    }

    public function home(){
        $data['homepage']   =   array(
            "username"  =>  Sesion::get('username')
        );
        $this->load->view('panel/header',$data);
        $this->load->view('panel/sidebar');
        $this->load->view('panel/home',$data);
        $this->load->view('panel/footer');
    }

    /*
     * bir controller fonksiyonu oluşturun
     * bu controller model ile haberleşsin
     * view işlemlerini gerçekleştirsin
     * form işlemlerini gerçekleştirsin
     * */


}