<?php

return [
    'mid'=>[
        'checkLogin'=>[
            'redis'=>'default',//config('database')
            'token_prefix'=>'tk',//redis中用于token的前缀
            'user_name'=>'uid',//用户登陆名
            'user_token'=>'token',//用户登陆token
        ]
    ]
];
