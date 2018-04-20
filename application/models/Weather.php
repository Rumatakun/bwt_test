<?php

namespace application\models;

use application\core\Model;
//use GuzzleHttp\Client;
use DOMDocument;
use DOMXPath;

class Weather extends Model {

    public $source;
    public $weather;

    public function getForecast(){

        $this->sourse = $this->getHtml();
        preg_match('/Local:\s(.*)>/',$this->sourse,$date);
        $datastring = substr($date[1],0,10);
        //echo $datastring;

        $dom    = new DOMDocument("1.0","utf-8");
        // $tables= new DOMDocument();

        @$dom->loadHTML('<?xml encoding="UTF-8">'.$this->source);
        $timeId=@$dom->getElementById('astronomy');
        $time=$timeId->lastChild->textContent;

        $xpath = new DOMXPath($dom);

        $query = "//*[@id='wrow-".$datastring."-03']/td[2]";
        $weather["Night_clouds"]= $xpath->query($query)->item(0)->textContent;

        $query = "//*[@id='wrow-".$datastring."-03']/td[3]/span[1]";
        $weather["Night_temp"]=$xpath->query($query)->item(0)->textContent;

        $query ="//*[@id='wrow-".$datastring."-03']/td[4]/span[1]";
        $weather["Night_pressure"]= $xpath->query($query)->item(0)->textContent;

        $query ="//*[@id='wrow-".$datastring."-03']/td[5]/dl/dt";
        $weather["Night_wind_direction"] =$xpath->query($query)->item(0)->textContent;;

        $query ="//*[@id='wrow-".$datastring."-03']/td[5]/dl/dd/span[1]";
        $weather["Night_wind_speed"] =$xpath->query($query)->item(0)->textContent;

        $query ="//*[@id='wrow-".$datastring."-03']/td[6]";
        $weather["Night_moisture"] =$xpath->query($query)->item(0)->textContent;

        $query ="//*[@id='wrow-".$datastring."-03']/td[7]/span[1]";
        $weather["Night_Feels"] =$xpath->query($query)->item(0)->textContent;

          //УТРО

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[2]';
        $weather["Morning_clouds"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[3]/span[1]';
        $weather["Morning_temp"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[4]/span[1]';
        $weather["Morning_pressure"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[5]/dl/dt';
        $weather["Morning_wind_direction"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[5]/dl/dd/span[1]';
        $weather["Morning_wind_speed"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[6]';
        $weather["Morning_moisture"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-09"]/td[7]/span[1]';
        $weather["Morning_Feels"] =$xpath->query($query)->item(0)->textContent;


          // День
        $query='//*[@id="wrow-'.$datastring.'-15"]/td[2]';
        $weather["Day_clouds"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[3]/span[1]';
        $weather["Day_temp"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[4]/span[1]';
        $weather["Day_pressure"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[5]/dl/dt';
        $weather["Day_wind_direction"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[5]/dl/dd/span[1]';
        $weather["Day_wind_speed"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[6]';
        $weather["Day_moisture"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-15"]/td[7]/span[1]';
        $weather["Day_Feels"] =$xpath->query($query)->item(0)->textContent;

          //Вечер
        $query='//*[@id="wrow-'.$datastring.'-21"]/td[2]';
        $weather["Evening_clouds"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[3]/span[1]';
        $weather["Evening_temp"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[4]/span[1]';
        $weather["Evening_pressure"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[5]/dl/dt';
        $weather["Evening_wind_direction"]=$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[5]/dl/dd/span[1]';
        $weather["Evening_wind_speed"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[6]';
        $weather["Evening_moisture"] =$xpath->query($query)->item(0)->textContent;

        $query='//*[@id="wrow-'.$datastring.'-21"]/td[7]/span[1]';
        $weather["Evening_Feels"] =$xpath->query($query)->item(0)->textContent;

        return $weather;
        //var_dump($weather);
        //debug($this->db);
    }

    public function getHtml(){
        $ch = curl_init();
        curl_setopt_array($ch,
            [
                CURLOPT_URL            => 'http://www.gismeteo.ua/city/daily/5093/',
                CURLOPT_HEADER         => false,
                CURLOPT_FAILONERROR    => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FORBID_REUSE   => true,
                CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.1) Gecko/2008070208'
            ]);
        $this->source=curl_exec($ch);
        curl_close($ch);
        return $this->source;
    }
}