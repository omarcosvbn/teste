<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Título e ícon da aba-->  
    <title>Register</title>
    <link rel="icon" type="image" href="/images/favicon.ico">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed&family=Quando&display=swap" rel="stylesheet">

    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="/style/login.css">
    <link type="text/css" rel="stylesheet" href="/style/document.css">
</head>
<body>
    <div class="Login" id="rect">
        <h1 id="title">Register</h1>
        <p>Already have an account? <a href="/php/login.php">Login!</a></p>
        <form action="" method="post">
            <div class="form" id="username">
                <label for="userName">USERNAME: <label>
                <input type="text" name="userName" id="userName" placeholder="Choose your username..." require>
            </div>
            <div class="form" id="email">
                <label for="input_email">EMAIL:*</label>
                <input type="text" name="email"  id="input_email" placeholder="Enter your email here..." require>
            </div>
            <div class="form" id="password">
                <label for="input_password">PASSWORD:*</label>
                <input type="password" name="password" id="input_password" placeholder="Enter your password here..." require>
            </div>
            <div class="form" id="btn_register">
                <input type = "submit" value = "REGISTER" id="btnRegister">
            </div>
        </form>
    </div>
</body>
</html>
<?php

use LDAP\Result;

$str = 'dbname = Wonka user = postgres password = postgres host = localhost port = 5432';
$connection = pg_connect($str);

if (!$connection) die("<script>alert('Not able to connect')</script>");
?>

