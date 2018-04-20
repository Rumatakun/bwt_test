<?php

namespace application\controllers;

use application\core\Controller;
require 'application/lib/FormValidation.php';

class AccountController extends Controller{


    function loginAction()
    {
        $data=$_POST;
        $errors= array();

        if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']==='POST')){
            $errors=formValidation($data);
           if(empty($errors)){
                if ($this->model->loginValidate($_POST)) { var_dump('valid');
                    $_SESSION['authorize'] = $_POST['email'];
                    unset($_POST['email']);
                    unset($_POST['password']);
                    //login message and redirect?
                }
                else{
                    //login error message
                }
           }
        }
        $vars=array('data'=>$data,'errors'=>$errors);
        $this->view->render('login',$vars);
        //var_dump($vars);
    }

    public function registerAction(){
        $data=$_POST;
        $errors= array();
        if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']==='POST')){
            $errors=formValidation($data);
            if(empty($errors)){
                $registerResult = $this->model->registration($_POST);
            }
        }
        $vars=array('data'=>$data,'errors'=>$errors);
        $this->view->render('sign up',$vars);
//

        //echo'signup';
    }


    //Функция очистки  данных от HTML и PHP тегов:
//    function clean($value = "") {
//        $value = trim($value);
//        $value = stripslashes($value);
//        $value = strip_tags($value);
//        $value = htmlspecialchars($value);
//
//        return $value;
//    }
}