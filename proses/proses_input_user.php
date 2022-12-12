<?php
include "connect.php";

$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['input_user'])) {

    $query = mysqli_query($con, "INSERT INTO user (nama,username,pass,level,nohp,alamat) VALUES ('$nama','$username','$password','$level','$nohp','$alamat')");

    if (!$query) {
        $pesan = "gagal input data";
        header('location:../user');
    } else {
        $pesan = "Berhasil input data";
        header('location:../user');
    }
    echo $pesan;
}
