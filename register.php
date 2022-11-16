<?php

include "vendor/autoload.php";

use App\Auth;

try { 
    $client = new Auth();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $result = $client->register($username, $email, $password);

    echo "<script>window.location.href='register-success.php';</script>";
    exit;
}

catch (Exception $e) {
    error_log($e->getMessage());
}

