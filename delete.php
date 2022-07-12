<?php
require_once('connect.php');
session_start();
$id=$_GET['id'];
switch($_SESSION['class']){

    case "cse":
                        $sql="delete from cse where id=".$id."";
                        $result=mysqli_query($conn,$sql);
                        if(!$result){
                            echo mysqli_error($conn);
                        }
                        else{
                            header("Location:cse.php");
    
                         }
                        break;
    case "ise":
                        $sql="delete from ise where id=".$id."";
                        $result=mysqli_query($conn,$sql);
                        if(!$result){
                            echo mysqli_error($conn);
                        }
                        else{
                            header("Location:ise.php");
    
                         }
                        break;
    case "civil":
                        $sql="delete from civil where id=".$id."";
                        $result=mysqli_query($conn,$sql);
                        if(!$result){
                            echo mysqli_error($conn);
                        }
                        else{
                            header("Location:civil.php");
    
                         }
                        break;
    case "me":
                        $sql="delete from me where id=".$id."";
                        $result=mysqli_query($conn,$sql);
                        if(!$result){
                            echo mysqli_error($conn);
                        }
                        else{
                            header("Location:me.php");
    
                         }
                        break;
    default:echo"error";

}
?>