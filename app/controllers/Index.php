<?php 
 
class Index extends Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function Anasayfa(){
        $this->load->view('home');


    }

    public function index(){
        $this->Anasayfa();
    }

    /*
     * public br fonksiyon oluşturun
     * oluşturulan bir fonksiyon değişkende model taşısın
     * bu model view kullansın
     *
     public function model_name($id){
        $index_model  =   $this->load->model('Index');
        $data['isimListele']   =   $index_model->isimListele($id);
        $this->load->view('isimListele',$data);
    }
     * */



}
