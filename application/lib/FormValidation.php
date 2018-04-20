<?php

function formValidation($data){
    $errors=array();
    $rulesPattern = [
        'email' => '/^\w{1,}@\w{1,}\.\w{2,}$/',
        'name' => "/^\w{1,24}$/" ,
        'password' => "/^\w{6,}$/",
        'message' => "/^\w{10,500}$/",
        'birthday'=>'/(^$)|(^\d{4}\-(0\d|1[012])\-([0-2]\d|3[01])$)/',
    ];
    if(isset($data['email'])){
        $email=trim($data['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){$errors['email']="email pattern";}
        if($email==''){$errors['email']="Введите email";}
    }
    if(isset($data['password'])){
        $password=trim($data['password']);
        if(!preg_match($rulesPattern['password'],$password)){$errors['password']="password pattern";}
        if($password==''){$errors['password']="Введите пароль";}
    }
    if(isset($data['password2'])){
        $password2=trim($data['password2']);
        if($password2!== trim($data['password'])){$errors['password2']="пароли не совпадают";}
        if($password2==''){$errors['password2']="повторите пароль";}
    }
    if(isset($data['name'])){
        $name=trim($data['name']);
        if($name==''){$errors['name']="Введите name";}
    }
    if(isset($data['surname'])){
        $surname=trim($data['surname']);
        if($surname==''){$errors['surname']="Введите surname";}
    }
    if(isset($data['message'])){
        $message=trim($data['message']);
        if(!preg_match($rulesPattern['message'],$message)){$errors['message']="message pattern";}
        if($message==''){$errors['message']="Введите message";}
    }
    if(isset($data['code'])){
        if(md5($_POST['code']) !== $_SESSION['randomnr2']){ $errors['code']="capcha pattern";}
        if($_POST['code'] == ""){$errors['code']="empty captcha";}
    }
    return $errors;
}