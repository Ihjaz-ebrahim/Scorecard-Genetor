<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['username'])){
    header("Location:home.php");

}

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql="select * from account where email='".$email."' and password='".$pass."' ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION["username"]=$row['email'];
            header("Location:home.php");
        }
    }
    else{
        echo"<script>alert('incorrect password/email');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mark</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-dark">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <div><a class="navbar-brand d-none" href="#"> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav main-nav">
                        <li class="nav-item"><a class="nav-link" href="" style="color: rgb(0,0,205);background: rgb(30,40,51);">About </a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php" style="color: rgb(0,0,205);background: rgb(30,40,51);">Feedback </a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php" style="color: rgb(0,0,205);background: rgb(30,40,51);">Student</a></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form class="form-signin" method="post" action="login.php" id="loginform">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary btn-block btn-lg btn-signin" name="submit" form="loginform" type="submit">Sign in </button>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>
</body>

</html>