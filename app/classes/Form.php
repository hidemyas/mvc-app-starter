<?php
class Form
{
    public $currentValue;
    public $values = array();
    public $errors = array();
    public $currentField;

    public function __construct()
    {

    }

    public function post($key)
    {
        $data = $this->Filter($_POST[$key]);
        $this->values[$key] = $data;
        $this->currentField = array('key'=>$key,'val'=>$data);
        $this->currentValue = $data;
        return $this;
    }

    public function Filter($item)
    {
        $step_one = trim($item);
        $step_two = strip_tags($step_one);
        $step_trhee = htmlspecialchars($step_two, ENT_QUOTES);
        return $step_trhee;
    }

    public function isEmpty()
    {
        if (empty($this->currentField['val'])) {
            $this->errors[$this->currentField['key']]['empty'] = "Lütfen Bu Alanı Boş Bırakmayınız";
        } else {
            //
        }

        return $this;
    }

    public function length($min = 0, $max)
    {
        $str_with = strlen($this->currentValue);
        if ($min < $str_with and $str_with > $max) {
            $this->errors[$this->currentField['key']]['length'] = "Bu Alan istenilen karakterde girmediniz , Lütfen $min ve $max arasındaki uzunluk kadar yazınız";

        }

        return $this;
    }

    public function submit()
    {
        if (empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }

}