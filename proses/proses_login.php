<?php
session_start();
include "connect.php";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5( htmlentities($_POST['password'])) : "";
if (!empty($_POST['submit'])) {
    $query = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' && pass = '$password'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $_SESSION['username_cloudvape'] = $username;
        $_SESSION['level_cloudvape'] = $hasil['level'];
        header('location:../home'); 
    } else { ?>
        <script>
            alert('username atau password salah');
            window.location='../login';
        </script>
<?php
    }
}
?>