<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
  
}
?>
<!DOCTYPE html>
<html style="background-color: #454d58;height: 500px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mark</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/A-Blog-Page.css">
    <link rel="stylesheet" href="assets/css/Fo oter-Basic.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>
<body background="cse.JPG"></body>
<body style="height: 500px;">
    <div style="background-color: #226e93;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left text-dark" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;line-height: 66px;">&nbsp; &nbsp;Mark List Management&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1"
                            onclick="location.href='logout.php'" style="background-color: #226e93;">LOGOUT</button></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#454d58;">
        <div class="container" style="background-color:transparent;">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding:0;min-width:480px;">
                    <div><img class="d-block float-left" style="margin:30px;margin-left:10px;max-width:40%;" src="assets/img/cse.jpg" height="150">
                        <div class="float-left" style="margin:30px;margin-left:-70px;width:280px;background-color:#fff;margin-top:40px;height:100%;min-height:160px;max-height:200px;box-shadow:0 0 2px #999;">
                            <p style="padding:20px;padding-bottom:0;margin-bottom:0;">Computer Science and Engineering</p>
                            <p style="padding:20px;padding-top:0;"><strong>Semester 5</strong></p><a style="padding:20px;color:#333;" href="cse.php">Open</a></div>
                    </div>
                </div>
                <div class="col-md-6" style="padding:0;min-width:480px;">
                    <div><img class="d-block float-left" style="margin: 30px;margin-left: 10px;max-width: 40%;height: 166px;width: 176px;" src="assets/img/ise.jpg" height="150">
                        <div class="float-left" style="margin: 30px;margin-left: -70px;width: 280px;background-color: #fff;margin-top: 40px;height: 107%;min-height: 160px;max-height: 200px;box-shadow: 0 0 2px #999;">
                            <p class="text-capitalize" style="padding:20px;padding-bottom:0;margin-bottom:0;">information Science engineering</p>
                            <p style="padding:20px;padding-top:0;"><strong>Semester 5</strong></p><a style="padding:20px;color:#333;" href="ise.php">Open</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#454d58;">
        <div class="container" style="background-color:transparent;">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding:0;min-width:480px;">
                    <div><img class="d-block float-left" style="margin:30px;margin-left:10px;max-width:40%;" src="assets/img/me.jpg" height="150">
                        <div class="float-left" style="margin:30px;margin-left:-70px;width:280px;background-color:#fff;margin-top:40px;height:100%;min-height:160px;max-height:200px;box-shadow:0 0 2px #999;">
                            <p style="padding:20px;padding-bottom:0;margin-bottom:0;">Mechanical Engineering</p>
                            <p style="padding:20px;padding-top:0;"><strong>Semester 5</strong></p><a style="padding:20px;color:#333;" href="me.php">Open</a></div>
                    </div>
                </div>
                <div class="col-md-6" style="padding:0;min-width:480px;">
                    <div><img class="d-block float-left" style="margin: 28px;margin-left: 10px;max-width: 40%;height: 149px;width: 175px;" src="assets/img/civil.jpg" height="150">
                        <div class="float-left" style="margin:30px;margin-left:-70px;width:280px;background-color:#fff;margin-top:40px;height:100%;min-height:160px;max-height:200px;box-shadow:0 0 2px #999;">
                            <p style="padding:20px;padding-bottom:0;margin-bottom:0;">Civil Engineering</p>
                            <p style="padding:20px;padding-top:0;"><strong>Semester 5</strong></p><a style="padding:20px;color:#333;" href="civil.php">Open</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>