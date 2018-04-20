<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

require 'application/lib/FormValidation.php';

class FeedbackController extends Controller{
    
    function sendfeedbackAction()
    {
        $data=$_POST;
        $errors= array();

        if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']==='POST')){
            $errors=formValidation($data);
            if(empty($errors)){
                $this->model->sendfeedback();
                //feedback was send message
            }
            var_dump('asf');

        }

        $vars=array('data'=>$data,'errors'=>$errors);
        $this->view->render('olo',$vars);
//        if(!empty($_POST)){
//            $this->view->message('succes','form is working');
//        }
    }
    
    function showfeedbackAction()
    {
       $result= $this->model->getFeedback();
        $vars=[
            'feedback'=>$result
        ];
        $this->view->render('ad',$vars);
    }
// remake it and add to /libs with namespace?
//    public function formValidation($data){
//        $errors=array();
//        $rulesPattern = [
//            'email' => '/^\w{1,}@\w{1,}\.\w{2,}$/',
//            'name' => "/^\w{1,3}$/" ,
//            'message' => "/^\w{6,}$/",
//        ];
//        if(isset($data['email'])){
//            $email=trim($data['email']);
//            if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){$errors['email']="email pattern";}
//            if($email==''){$errors['email']="Введите email";}
//        }
//        if(isset($data['name'])){
//            $name=trim($data['name']);
//            if($name==''){$errors['name']="Введите name";}
//        }
//        if(isset($data['message'])){
//            $message=trim($data['message']);
//            if(!preg_match($rulesPattern['message'],$message)){$errors['message']="message pattern";}
//            if($message==''){$errors['message']="Введите message";}
//        }
//        return $errors;
//    }
    
}