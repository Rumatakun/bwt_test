<?php
namespace application\models;

use application\core\Model;

class Account extends Model {


    public function registration($var){


        $dbEmails=$this->db->row('SELECT email FROM users');
        $emailQuantity=count($dbEmails);
        $result= true;
        for($i=0;$i<$emailQuantity;$i++){
            if($dbEmails[$i]['email'] == $var['email']){
                $result= false;
            }
        }
        if($result){
            $params =[
                'email'=>$var['email'],
                'password'=>password_hash($var['password'], PASSWORD_DEFAULT ),
                'name'=>$var['name'],
                'surname'=>$var['surname'],
                'gender'=>$var['gender'],
                'birthday'=>$var['birthday'],
            ];
            var_dump($params);
             $sql= "INSERT INTO users (email, password, name, surname, gender) VALUES(:email, :password, :name, :surname, :gender,:birthday)";
             $this->db->query( $sql,$params);
            return $result;
        }else{
            var_dump('erorr');
            return $result;
        }

    }

    public function loginValidate($post) {
        $emails = $this->db->row('SELECT email FROM users');
        $passwords = $this->db->row('SELECT password FROM users');

        var_dump(password_hash($post['password'],PASSWORD_DEFAULT));
        var_dump($passwords);
       // var_dump(password_hash(post['password'],PASSWORD_DEFAULT));
        for($i=0; $i<count($emails);$i++){
            // сломал хешами
            if(($post['email'] == implode ($emails[0]))&&(password_verify($post['password'],implode ($passwords[0])) )){
               // var_dump('ad');
                return  true;
            }
            return  false;
        }
    }
}