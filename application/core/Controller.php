<?php 

namespace application\core;

use application\core\View;
use application\lib\Db;

abstract class Controller{
    
    public $route;
    public $view;
    public $acl;

    public function __construct($route)
    {
        $db= new Db;
        $this->route=$route;
        if(!$this->checkAcl($this->acl,$route['action'])){
            View::errorCode(403);

        }
        if(array_key_exists('logout',$_POST)){
            $this->logout();
        }

        $this->view= new View($route);
        $this->model=$this->loadModel($route['controller']);


    }
    
    public function loadModel($name)
    {
        $path='application\models\\'.ucfirst($name);
        if(class_exists($path))
        {
            return new $path;
        }
    }

    public function checkAcl(){
        $this->acl = require 'application/acl/acl.php';
        if($this->isAcl('all')){
            return true;
        }
        elseif(isset($_SESSION['authorize']) and $this->isAcl('authorize')){
            return true;
        }
        return false;
    }


//    public function checkAcl($acl,$action){
//       foreach($acl as $key=>$val)
//       {
//            if($key =='authorize'){
//               if(in_array($action,$val))
//               {
//                   if(isset($_SESSION['userid'])){return false;}
//                   else{return true;}
//               }
//            }
//
//            if($key =='guest'){
//               if(in_array($action,$val)){return false; }
//            }
//            if($key =='admin'){
//               if(in_array($action,$val)){return true; }
//            }
//           return false;
//       }
//    }


    public function isAcl($key) {
        return in_array($this->route['action'], $this->acl[$key]);
    }

    public function logout() {
        unset($_SESSION['authorize']);
        unset($_POST['logout']);
    }
    /*
    public function reddirect($url){
        header('location'.$url);
        exit;
    }*/
}