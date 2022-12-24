<?php
include "connect.php";

$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['delete_user'])) {

    $query = mysqli_query($con,"DELETE FROM user WHERE id = '$id'");

    if (!$query) {
        $pesan = '<script>alert ("data gagal dihapus");
        window.location="../user"</script>';
    } else {
        $pesan = '<script>alert ("data berhasil dihapus");
        window.location="../user"</script>';
    }
    echo $pesan;
}
