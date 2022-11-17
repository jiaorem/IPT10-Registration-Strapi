<?php

include "vendor/autoload.php";

use App\Auth;

try { 
    $client = new Auth();

    $identifier = $_POST['identifier'];
    $password = $_POST['password'];
    
    $result = $client->login($identifier, $password);
    $body = json_decode($result->getBody()->getContents());
    $id = $body->user->id;

     header('Location: welcome-page.php?id=' . $id);
}

catch (Exception $e) {
    error_log($e->getMessage());
}

