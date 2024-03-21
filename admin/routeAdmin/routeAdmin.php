<?php
    $host = explode ('?', $_SERVER['REQUEST_URI'])[0];
    $num =substr_count($host, '/');
    $path = explode('/', $host)[$num];


    if($path == '' OR $path =='index.php'){
        $response = Controller::StartSite();
    }

    elseif($path =='login') {
  
        $response = controllerAdmin::LoginAction();
        echo $response;
    }
    elseif($path =='logout' and isset($_GET['id'])) {
        $response = controllerAdmin::LogoutAction();
    }

    else{
        $response = controllerAdmin::error404();
    }
