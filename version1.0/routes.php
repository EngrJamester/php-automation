<?php

    require_once __DIR__ . '/app/classes/route.php';
    require_once __DIR__ . '/app/controller/controller.php';
    require_once __DIR__ . '/app/controller/home.php';
    require_once __DIR__ . '/app/controller/settings.php';
    require_once __DIR__ . '/app/controller/login.php';
    require_once __DIR__ . '/app/controller/logout.php';
    require_once __DIR__ . '/app/controller/main.php';
    require_once __DIR__ . '/app/controller/change-password.php';


    Route::set('index.php',function(){
        Main::CreateView('main-view');
    });

    Route::set('home',function(){
        Home::CreateView('home-view');
    });

    Route::set('login',function(){
        Login::CreateView('login-view');
    });
    
    Route::set('logout',function(){
        Logout::CreateView('logout-view');
        
    });
    Route::set('controller',function(){
        Controller::CreateView('controller-view');
        Controller::InitiateDB();
    });

    Route::set('settings',function(){
        Settings::CreateView('settings-view');
    });

    Route::set('user',function(){
        ChangePassword::CreateView('change-password-view');
    });



    

?>