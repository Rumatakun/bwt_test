<?php
//Access Control List
return[
    'all'=>[
        'login','sendfeedback', 'register','index'
    ],
    'authorize'=>[
        'weatherview','showfeedback'
    ],
    'guest'=>[

    ],
    'admin'=>[
        
    ],
];