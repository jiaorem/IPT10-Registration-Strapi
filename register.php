<?php

include "vendor/autoload.php";

use App\Auth;

try{ 
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //var_dump($username, $email, $password);
    $client = new Auth();
    $result = $client->registerUser($username, $email, $password);
    //var_dump($result);
    var_dump($result->getStatusCode());
    var_dump($result->getReasonPhrase());
    var_dump($result->getProtocolVersion());
    var_dump($result->getBody()->getContents());
}
catch (Exception $e) {
    error_log($e->getMessage());
}

