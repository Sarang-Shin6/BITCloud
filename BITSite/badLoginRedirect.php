<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to BIT</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</header>
<body id="body">
<nav class="grey-bg header" style="width:100%;height:70px;">
    <a href="index.php"><img class="logo" src="images/BITLogoLone.png" alt="BIT LOGO" height="70px" style="margin-left:10px;"/></a>
</nav>
<div class="loginPositionContainer">
    <p class="login orange-fore" id="login" data-toggle="modal" data-target="#loginModal">LOGIN</p>
</div>

<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <form name="login" action="login.php" method="POST">
                    <label id="usernameLabel" for="username"><b>Username</b></label>
                    <input id="username" class="loginBoxes" type="text" placeholder="Enter Username" name="username" required/>
                    <label for="password"><b>Password</b></label>
                    <input id="password" class="loginBoxes" type="password" placeholder="Enter Password" name="password" required/>
                    <input class="loginButton" type="submit" value="Login"/>
                    <label for="remember" style="margin-top: -5px;"><input id="remember" style="width:15px;" type="checkbox" checked="checked" name="remember">Remember me</label>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="mainSection" >
    <section id="bigLogoSec"><p>username and password don't match, please try again!</p> </section>
    <?php
    header('Refresh: 5; URL=index.php');
    ?>
</section>
<?php require('Structure/Footer.html') ?>