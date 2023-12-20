<?php
include "connect.php";
$id = $_GET['id_video'];
if(hapusVideo($id)>0){
    header("location:icons-bootstrap.php");
}
?>