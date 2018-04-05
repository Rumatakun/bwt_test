<?php

namespace application\controllers;

use application\core\Controller;
use GuzzleHttp\Client;
use DOMDocument;
use DOMXPath;

require_once  __DIR__.'/../../vendor/autoload.php';
class WeatherController extends Controller{

    function weatherviewAction()
    {
        $vars = $this->model->getForecast();
    //$vars=["av"=>"214", "grdcv"=>"765",];
        //$vars=$this->model->weather;
   // debug( $vars);
       // $var =$this->model->weather;
        //debug($this->model->weather);

        $this->view->render('OK',$vars);
    }
}