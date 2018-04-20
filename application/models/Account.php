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
        }//'password'=>password_hash($var['password'], PASSWORD_DEFAULT ),
        if($result){
            $params =[
                'email'=>$var['email'],
                'password'=>password_hash($var['password'],PASSWORD_DEFAULT ),
                'name'=>$var['name'],
                'surname'=>$var['surname'],
                'gender'=>$var['gender'],
                'birthday'=>date('Y-m-d',strtotime($var['birthday'])),
            ];
            var_dump($params);
             $sql= "INSERT INTO users (email, password, name, surname, gender,birthday ) VALUES(:email, :password, :name, :surname, :gender,:birthday)";
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
        $emailquantity=count($emails);
        for($i=0; $i<$emailquantity;$i++){
            if(($post['email'] == implode ($emails[$i]))){
                if(password_verify($post['password'],implode ($passwords[$i]))){
                    return  true;
                }
            }
            return  false;
        }
    }
}