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
        $this->view->render('OK',$vars);
    }
}