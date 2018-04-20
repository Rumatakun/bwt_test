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
        // checking if user has access via acl if not we'll show 403 page
        if(!$this->checkAcl($this->acl,$route['action'])){
            View::errorCode(403);

        }
        //logout action
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

    public function isAcl($key) {
        return in_array($this->route['action'], $this->acl[$key]);
    }

    public function logout() {
        unset($_SESSION['authorize']);
        unset($_POST['logout']);
    }
}