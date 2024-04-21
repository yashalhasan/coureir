<?php
include 'connection.php';
unset($_SESSION['is_login']);
session_destroy();
header('location:login.php');
die();
?>