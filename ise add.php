<<?php 
session_start();
require_once('connect.php');
if(!isset($_SESSION['username'])){
    header("Location:login.php");
  
}
if(isset($_POST['add'])){
$name=$_POST['name'];
    $cn=$_POST['cn'];
    $dbms=$_POST['dbms'];
    $me=$_POST['me'];
    $atc=$_POST['atc'];
    $unix=$_POST['unix'];
    $adp=$_POST['adp'];
    $sql="insert into ise(`name`, `cn`, `dbms`, `me`, `atc`, `unix`, `adp`) values( '".$name."',".$cn.",".$dbms.",".$me.",".$atc.",".$unix.",".$adp.")";
                        $result=mysqli_query($conn,$sql);
                        if(!$result){
                            echo mysqli_error($conn);
                        }
                        else{
                            header("Location:ise.php");
    
                         }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mark</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/A-Blog-Page.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <div style="background-color: #226e93;height: 1000px;color: rgb(240,250,255);">
        <div class="row register-form" style="height: 0;">
            <div class="col-md-8 offset-md-2" style="height: 0;">
                <form class="custom-form" style="height: 800px;" action="ise add.php" method="post">
                    <h1>Add Menu</h1>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label for="name-input-field"></label><label for="name-input-field">STUDENT NAME</label><label for="name-input-field"></label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">CN</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="cn"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">DBMS</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="dbms"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">ME</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="me"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">ATC</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="atc"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">UNIX</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="unix"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">ADP</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="number" name="adp"></div>
                    </div><button class="btn btn-light submit-button" name="add" type="submit">Done</button><button class="btn btn-danger active submit-button" onclick="location.href='ise.php'" type="button">cancel</button></form>
            </div>
        </div>
    </div>
    
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>