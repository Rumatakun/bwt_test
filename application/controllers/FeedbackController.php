<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class FeedbackController extends Controller{
    
    function sendfeedbackAction()
    {
        $this->view->render('olo');

        $data=$_POST;

        if(isset($data['do_signup'])){
            $url='/weather';
            header('location'.$url);
        }

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
    
}