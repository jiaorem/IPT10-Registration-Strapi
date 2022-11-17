<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IPT10 STRAPI Registration</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
                Register Strapi Account
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="POST" action="register.php">
                        <div class="form-group">
                            <label class="form-control-label">Username</label>
                            <input type="text" class="form-control" name="username" required placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" minlength="6" required placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confPass" id="confirm_password"  minlength="6" required placeholder="Confirm Password">
                        </div>
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btml login-button">
                                <button  type="button" class="btn btn-outline-primary" style=" text-align:center;"><a href="login-form.php" style="color:#0DB8DE;text-decoration: none;">LOGIN</a></button>
                            </div>
                            <div class="col-lg-6 login-btmr register-button">
                                <button type="submit" class="btn btn-outline-primary" style="text-align:center;">REGISTER</button>
                            </div>
                        </div>
                    </form>
                </div>
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
        
        .login-form {
            margin-top: 25px;
            text-align: left;
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
            float: left;
        }
        
        .login-button {
            padding-right: 0px;
            text-align: left;
            margin-bottom: 25px;
        }

        .register-button {
            padding-right: 0px;
            text-align: right;
            margin-bottom: 25px;
        }
        
        .login-text {
            text-align: left;
            padding-left: 0px;
            color: #A2A4A4;
        }
        
        .loginbttm {
            padding: 0px;
        }
        </style>

        <script>
            var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
</html>

