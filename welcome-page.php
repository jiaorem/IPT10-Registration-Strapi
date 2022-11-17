<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use App\Auth;

$id = $_GET['id'];

$client = new Auth();

$user = $client->getUser($id);
$userData = json_decode($user);

//var_dump($userData);
 $username = $userData->username;
 $email = $userData->email;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IPT10 STRAPI Registration</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                Welcome!
            </div>
			<div class="col-lg-12 login-text">
                Username: <?= $username ?> <br>
				Email: <?= $email ?> <br>
            </div>
			<div class="col-lg-12 login-button">
				<button  type="button" class="btn btn-outline-primary"><a href="login-form.php" style="color:#0DB8DE;text-decoration: none; float: center;">LOGOUT</a></button>
			</div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
    </body>
    <style>
        body {
            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }
        
        .login-box {
            margin-top: 75px;
            height: auto;
            background: #1A2226;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }
        
        .login-key {
            height: 100px;
            font-size: 80px;
            line-height: 100px;
            background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .login-title {
            margin-top: 15px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: #ECF0F5;
        }

		.login-text {
            margin-top: 15px;
            text-align: center;
            font-size: 20px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: #ECF0F5;
        }
        
        .login-form {
            margin-top: 25px;
            text-align: center;
        }
        
        input[type=text] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 0px;
            color: #ECF0F5;
        }

        input[type=email] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 0px;
            color: #ECF0F5;
        }
        
        input[type=password] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            padding-left: 0px;
            margin-bottom: 20px;
            color: #ECF0F5;
        }
        
        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }
        
        .form-control:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 2px solid #0DB8DE;
            outline: 0;
            background-color: #1A2226;
            color: #ECF0F5;
        }
        
        input:focus {
            outline: none;
            box-shadow: 0 0 0;
        }
        
        label {
            margin-bottom: 0px;
        }
        
        .form-control-label {
            font-size: 10px;
            color: #6C6C6C;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .btn-outline-primary {
            border-color: #0DB8DE;
            color: #0DB8DE;
            border-radius: 0px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        
        .btn-outline-primary:hover {
            background-color: #0DB8DE;
            right: 0px;
        }
        
        .login-btmr {
            float: right;
        }

        .login-btml {
            float: center;
			text-align: center;
        }
        
        .login-button {
            padding-right: 0px;
            text-align: center;
            margin-bottom: 25px;
			float: center;
        }
        
        </style>
</html>

