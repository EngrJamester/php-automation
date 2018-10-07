<?php
require_once './app/classes/route-function.php';
require_once './app/classes/route.php';

Route::set('index.php',function(){
    if(session_status() ==  PHP_SESSION_NONE ){
       
        echo "FUCK";
    }else{
        Controller::CreateView('home');
    }

});

Route::set('home',function(){
    Controller::CreateView('home');
});

Route::set('controller',function(){
    Controller::CreateView('controller');
});

Route::set('settings',function(){
    Controller::CreateView('settings');
});

Route::set('logout',function(){
    Controller::UserCreateView('logout');
    
});

Route::set('user',function(){
    if(session_status() ==  PHP_SESSION_NONE ){
        echo "FUCK";
    }else{
        Controller::UserCreateView('change-password');
    }
});

Route::set('logout',function(){
    Controller::UserCreateView('login');
    
});
?>