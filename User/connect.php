<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="pbw";

$conn = mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set('Asia/Jakarta');

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
?>