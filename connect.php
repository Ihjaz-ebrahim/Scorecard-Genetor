<?php
$server="localhost";
$username="root";
$password="";
$dbname="mark";

$conn =mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    echo "failed to connect db";
}
?>