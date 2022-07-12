<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
  
}
  $id=$_GET['id'];
if(isset($_POST['submit'])){
    $mark=$_POST['mark'];
    $sub=$_POST['subject'];
  
    $sql="update civil set ".$sub."=".$mark." where id=".$id."";

    $result=mysqli_query($conn,$sql);
    if(!$result){
         echo mysqli_error($conn);
     }
     else{
        header("Location:civil.php");
    
     }
}
?>
<!DOCTYPE html>
<html style="background-color: #226e93;">

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
    <div style="background-color: #226e93;height: 670px;">
        <div class="row register-form" style="height: 0;">
            <div class="col-md-8 offset-md-2" style="height: 0;">
                <form class="custom-form" style="height: 0600px;" method="post" id="forme" action="civil edit.php?id=<?php echo $id; ?>">
                    <h1 style="color: rgb(255,255,255);">Edit Menu</h1>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field" style="color: rgb(255,255,255);">MARK</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" name="mark" type="number"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field" style="color: rgb(255,255,255);">SUBJECT</label></div>
                        <div class="col-sm-4 input-column"><select name="subject" class="form-control"><option value="ais">AIS</option><option value="he">HE</option><option value="cme">CME</option><option value="mwe">MWE</option><option value="bgt">BGT</option><option value="drc">DRC</option></select></div>
                    </div><button class="btn btn-light submit-button" form="forme" name="submit" type="submit">Done</button><button class="btn btn-danger active submit-button" onclick="location.href='civil.php'" type="button">cancel</button></form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>