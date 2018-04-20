<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{
    
    function indexAction()
    {
         $this->model->getNews();
        $vars=[];
        $this->view->render('mainINdex', $vars);
    }
    
    
}