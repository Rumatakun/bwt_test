<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
    
    function loginAction()
    {
        //js message
//        if(!empty($_POST)){
//            //exit(json_encode(['status'=>'succes','message'=>123]));
//        }

            $this->view->render('login');


       // echo'login';
        //$this->registerAction();
    }
    
    public function registerAction(){

        //debug( 'application/views/'.$this->view->path.'.php');

        $this->view->render('sign up');
//        $this->model->checkReg();

        //echo'signup';
    }

    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

}