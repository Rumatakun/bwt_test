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
                $this->model->sendfeedback($_POST);
                //feedback was send message
            }
        }
        $vars=array('data'=>$data,'errors'=>$errors);
        $this->view->render('olo',$vars);
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