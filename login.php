<?php

include "vendor/autoload.php";

use App\Auth;

try { 
    $client = new Auth();

    $identifier = $_POST['identifier'];
    $password = $_POST['password'];
    
    $result = $client->login($identifier, $password);
     $results = $result->getBody()->getContents();
    // $result->getContents();
     $body = json_decode($results);
    //$body = json_decode($result->getBody()->getContents());
    var_dump($body);
    // $id = $body->user->id;
    // //var_dump($id);
    // header('Location: welcome-page.php?id=' . $id);
}

catch (Exception $e) {
    error_log($e->getMessage());
}

