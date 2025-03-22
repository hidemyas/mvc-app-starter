<?php 
 

class Admin_Model extends Model {
    public function __construct()
    {
        parent::__construct();
//        echo "Model Dosyası";
    }

    public function userControl($arr    =   array()){
        $sql    =   "SELECT * FROM kullanicilar WHERE kadi=:kadi AND parola=:parola";
        $query_count    =   $this->db->effectedRows($sql,$arr);
        if ($query_count>0){
            return $this->db->select($sql,$arr);
        }else{
            return false;
        }
    }


}