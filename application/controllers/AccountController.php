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
            //
            $errors=formValidation($data);
            if(empty($errors)){
                if ($this->model->loginValidate($_POST)) {
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
    }
}