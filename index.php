<?php
session_start();

if ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "order.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
    $page = "customer.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    $page = "user.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    if ($_SESSION['level_cloudvape']==1) {
        $page = "report.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'menu') {
    $page = "menu.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    $page = "proses/logout.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} else {
    $page = "home.php";
    include "main.php";
}
