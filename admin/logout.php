<?php 
    session_start();
    unset($_SESSION['user_name']);
    // echo 'logout thanh cong';
    header("Location: login.php");
?>