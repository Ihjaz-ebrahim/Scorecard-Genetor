<?php
require_once('connect.php');
session_start();
$_SESSION['class']="me";
if(!isset($_SESSION['username'])){
    header("Location:login.php");

}

   
    $sql="select * from me ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo mysqli_error($conn);
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
    <div style="background-color: #226e93;"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1" onclick="location.href='home.php'" style="background-color: rgb(34,110,147);">Back</button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left" style="font-weight: bold;color: rgb(34,110,147);font-size: 24px;line-height: 66px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; MECHANICAL ENGINEERING &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1" onclick="location.href='me add.php'" style="background-color: rgb(34,110,147);">ADD STUDENT</button></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs" style="width: 800px;">
                    <tr style="width: 900px;">
                        <th id="trs-hd" class="col-lg-1" style="width: 500px;">Name</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 500px;">ME</th>
                        <th id="trs-hd" class="col-lg-3" style="width: 500px;">TME</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 500px;">FP</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 500px;">OM</th>
                        <th id="trs-hd-2" class="col-lg-2" style="width: 500px;">DOM</th>
                        <th id="trs-hd-1" class="col-lg-2" style="width: 500px;">TM</th>
                        <th id="trs-hd" class="col-lg-2" style="width: 500px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                   <?php
                         if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo" <tr style='color:black'>
                            <td>".$row['name']."</td>
                            <td>".$row['me']."</td>
                            <td>".$row['dme']."</td>
                            <td>".$row['fp']."</td>
                            <td>".$row['om']."</td>
                            <td>".$row['dom']."</td>
                            <td>".$row['tm']."</td>
                           
                            <td><button class='btn btn-success' onclick='edit(".$row['id'].")' style='margin-left: 5px;' type='submit'><i class='fa fa-edit' style='font-size: 15px;'></i></button><button class='btn btn-danger' style='margin-left: 5px;' onclick='deleterow(".$row['id'].")' type='submit'><i class='fa fa-trash' style='font-size: 15px;'></i></button></td>
                        </tr>";
        }}
    
    else{
        echo"<tr><td colspan='12'><h3>no data found</h3></td></tr>";
    }


?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
     <script type="text/javascript">
        function edit(id){
           location.href="me edit.php?id="+id;

        }
        function deleterow(id){
           location.href="delete.php?id="+id;

        }

    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>