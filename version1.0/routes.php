<?php

    require_once __DIR__ . '/app/classes/route.php';
    require_once __DIR__ . '/app/controller/controller.php';
    
    Route::set('login',function(){
        if(session_status() == PHP_SESSION_NONE)
        {

            Controller::CreateView('login-view');
        }else{
            
            Controller::CreateView('home-view');
        }
    });

    Route::set('index.php',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('home-view');
        }
       
    });

    Route::set('home',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('home-view');
        }
    });

    Route::set('controller',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('controller-view');
        }
    });

    Route::set('settings',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('settings-view');
        }
     });
  
    Route::set('logout',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('logout-view');
        }
    });

    Route::set('change-password',function(){
        if(session_status() == PHP_SESSION_NONE)
        {
            Controller::CreateView('login-view');
        }else{
            Controller::CreateView('change-password-view');
        }
    });
?>