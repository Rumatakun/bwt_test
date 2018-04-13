<?php
namespace application\models;

use application\core\Model;

class Account extends Model {


    public function checkReg(){
        $data=$_POST;
        var_dump($data);
    }

    public function loginValidate($post) {
        $emails = $this->db->row('SELECT email FROM users');
        $passwords = $this->db->row('SELECT password FROM users');

        for($i=0; $i<count($emails);$i++){
            if(($post['email'] == implode ($emails[0]))&&($post['password'] == implode ($passwords[0]))){
               // var_dump('ad');
                return  true;
            }
            return  false;
        }
    }
}