<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['username'])){
    header("Location:feedback.php");

}

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql="select * from student where email='".$email."' and password='".$pass."' ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo mysqli_error($conn);
    }
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION["username"]=$row['email'];
            header("Location:feedback.php");
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
    <title>mark</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login-1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1"  onclick="location.href='login.php'" style="background-color: rgb(30, 40, 51);">Back</button>
    <div class="login-card">
        <div>
            <h2 class="text-center">Student Login</h2>
        </div><img class="img-fluid profile-img-card" src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        </nav>
        <form class="form-signin" method="post" action="markcard.php" id="loginform">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" required="" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" required="" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary btn-block btn-lg btn-signin" name="submit" form="loginform" type="submit">Sign in </button>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    </div>
</body>

</html>