<?php 
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    if(!isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'adm') {
        header('Location: ../index.php');
        exit();
    }
?>