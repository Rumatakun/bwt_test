<?php

namespace application\models;

use application\core\Model;

class Feedback extends Model {
    public $error;

    public function getFeedback(){
        echo 'model';
        $result = $this->db->row('SELECT name,text,email FROM feedback');
        return $result;
       // debug($this->db);
       // $data= $db->column('SELECT name FROM feedback WHERE id = :id',$params);
    }


    public function contactValidate($post){
        $nameLen = iconv_strlen(@$post['name']);
        $textLen = iconv_strlen(@$post['text']);
            if ($nameLen < 3 or $nameLen > 20) {
                $this->error = 'Имя должно содержать от 3 до 20 символов';
                return false;
            } elseif (!filter_var(@$post['email'], FILTER_VALIDATE_EMAIL)) {
                $this->error = 'E-mail указан неверно';
                return false;
            } elseif ($textLen < 10 or $textLen > 500) {
                $this->error = 'Сообщение должно содержать от 10 до 500 символов';
                return false;
            }
        return true;
    }

    public function sendfeedback(){
        if ($this->contactValidate($_POST)) {
            $params = array(
                "name" =>  $_POST['name'],
                "email" =>  $_POST['email'],
                "text" =>  $_POST['text']
            );
            //debug($params);
            $sql ="INSERT INTO feedback(name, email, text) VALUES (:name, :email, :text)";
            $this->db->query($sql,$params);
            //debug($this->model->error);
            //  INSERT INTO `feedback` (`id`, `name`, `email`, `text`) VALUES (NULL, 'adsf', 'sda@dasf.ru', 'sdfsaf')
            //~~~~~~~дописать уведомление об отправке
        }
    }



}