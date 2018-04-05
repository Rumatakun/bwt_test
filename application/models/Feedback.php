<?php

namespace application\models;

use application\core\Model;

class Feedback extends Model {

    public function getFeedback(){
        echo 'model';
        $result = $this->db->row('SELECT name,text,email FROM feedback');
        return $result;
       // debug($this->db);
       // $data= $db->column('SELECT name FROM feedback WHERE id = :id',$params);
    }
}