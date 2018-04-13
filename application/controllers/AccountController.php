<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
    
    function loginAction()
    {

        if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']=='POST')){
            if ($this->model->loginValidate($_POST)) {
                $_SESSION['authorize'] = $_POST['email'];
//                session_destroy();
                unset($_POST['email']);
                unset($_POST['password']);
            }
        }
        $this->view->render('login');
    }

    public function registerAction(){
        //todo $_SERVER['REQUEST_METHOD']=='POST' +почитать

        //debug( 'application/views/'.$this->view->path.'.php');

        $this->view->render('sign up');
//        $this->model->checkReg();

        //echo'signup';
    }



}