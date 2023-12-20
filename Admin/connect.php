<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pbw";

$conn = mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set('Asia/Jakarta');
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}
function register($data){
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $email = $data['email'];
    $pw = mysqli_real_escape_string($conn, $data['pw']);
    $pw2 = mysqli_real_escape_string($conn, $data['pw2']);
    //Cek kesamaan username
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah dipakai!');</script>";
        return false;
    }
    //Cek konfirmasi pw
    if($pw !== $pw2){
        echo "<script>alert('password konfirmasi tidak sama!');</script>";
        return false;
    }
    //Enkrip pw
    $pw = md5($pw);
    //Insert DB
    mysqli_query($conn, "INSERT INTO users(username,email_user,pw) VALUES('$username','$email','$pw')");

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM cart WHERE id_pdt=$id");
    return mysqli_affected_rows($conn);
}
function hapusAkun($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM users WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusVid($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM video WHERE id_video=$id");
    return mysqli_affected_rows($conn);
}
function hapusBerita($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM berita WHERE id_berita=$id");
    return mysqli_affected_rows($conn);
}
function hapusPd($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM product WHERE id_pdt=$id");
    return mysqli_affected_rows($conn);
}

?>