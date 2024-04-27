<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--Título e ícon da aba-->  
    <title>Login</title>
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
        <h1 id="title">Wonka's Factory</h1>
        <h1 id="welcome">Welcome</h1>
        <p>Don't have an account yet? <a href="/php/register.php">Register!</a></p>
        <form action="" method="post">
            <div class="form" id="email">
                <label for="input_email">EMAIL:*</label>
                <input type="text" name="email"  id="input_email" placeholder="Enter your email here...">
            </div>
            <div class="form" id="password">
                <label for="input_password">PASSWORD:*</label>
                <input type="password" name="password" id="input_password" placeholder="Enter your password here...">
            </div>
            <div class="form" id="btn_login">
                <input type = "submit" value = "LOGIN" id="btnLogin">
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

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $email = $_POST["email"];
    $password = $_POST["password"];

    //$login_query = ;

    $result = pg_query($connection,$login_query) or die("Erro na ligação do Login");

    if (pg_num_rows($result) > 0) {
        $row = pg_fetch_assoc($result);
        // Compare the submitted password with the stored hash
        if (password_verify($password, $row["password"])) {
            // Password is correct, set session variables
            $_SESSION['email'] = $email;
            header("location:index.php");
        } else {
            echo "<script>alert('Incorrect password')</script>";
        }
    } else {
        echo "<script>alert('Email not found')</script>";
    }

    pg_close($connection);
}

