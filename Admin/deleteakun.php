<?php
include "connect.php";
$id = $_GET['id'];
if(hapusAkun($id)>0){
    header("location:components-alerts.php");
}
?>