<?php
include "connect.php";
$id = $_GET['id_berita'];
if(hapusBerita($id)>0){
    header("location:forms-elements.php");
}
?>