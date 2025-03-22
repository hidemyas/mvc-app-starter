<?php

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login(){
        Sesion::init();
        if (Sesion::get('login')){
            // eğer giriş yapmışsa
//            Sesion::destroy();// yönlendirme
            header('Location: '.SITE_URL.'/panel');
            exit();
        }else{
            $this->load->view('admin/loginForm');
        }
    }

    public function runLogin(){
        $username   =   $_POST['username'];
        $password   =   $_POST['password'];
        $data   =   array(
            ":kadi"=>$username,
            ":parola"=>$password
        );
        // db işlemleri
        $admin_model    =   $this->load->model('admin');
        $result  =   $admin_model->userControl($data);

        if ($result==false){
            // yanlış giriş
            print_r($result);
            // yönlendirme
            header('Location: '.SITE_URL.'/admin/login');
            exit();
        }else{
            //         sesion işlemleri
            Sesion::init();
            Sesion::set("login",true);
            Sesion::set("username",$result[0]['kadi']);
            Sesion::set("userID",$result[0]['id']);
            // yönlendirme
            header('Location: '.SITE_URL.'/panel/home');
            exit();
        }



    }

    public function logout(){
        Sesion::init();
        Sesion::destroy();
        // çıkış yönlendirmesi
        header('Location: '.SITE_URL."/admin/login");
        exit();
    }

}