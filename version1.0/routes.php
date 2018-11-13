<?php
    
    require_once __DIR__ . '/app/classes/route.php';
    require_once __DIR__ . '/app/controller/controller.php';
    
    // Route::set('login',function(){
    //     if(isset($_SESSION['login_user']))
    //     {            
    //         Controller::CreateView('home-view');
    //     }else{
    //         Controller::UserCreateView('login-view'); 
    //     }
    // });

    Route::set('index.php',function(){
        // if(isset($_SESSION['login_user']))
        // {
            
        // }else{
        //     Controller::UserCreateView('login-view');
        // }
        Controller::CreateView('controller-view');
    });

    Route::set('home',function(){

        // if(isset($_SESSION['login_user']))
        // {
           
        // }else{
        //     // header("Location: login_view.php"); 
        //     Controller::UserCreateView('login-view');
        // }
        Controller::CreateView('controller-view');
    });

    Route::set('controller',function(){
        // if(isset($_SESSION['login_user']))
        // {
            
        // }else{
        //     Controller::UserCreateView('login-view');
        // }
        Controller::CreateView('controller-view');
    });

    Route::set('settings',function(){
        // if(isset($_SESSION['login_user']))
        // {
            
        // }else{
        //     Controller::UserCreateView('login-view');
        // }
        Controller::CreateView('settings-view');
    });
  
    // Route::set('logout',function(){
    //     if(!isset($_SESSION['login_user']))
    //     {
    //         Controller::UserCreateView('logout-view');
    //     }else{
    //         Controller::UserCreateView('logout-view');
    //     }
    // });

    Route::set('change-password',function(){
        // if(isset($_SESSION['login_user']))
        // {
            
        // }else{
        //     header("Location: login_view.php"); 
        // }
        Controller::UserCreateView('change-password-view');
    });
?>