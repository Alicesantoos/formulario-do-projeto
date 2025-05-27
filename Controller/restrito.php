<?php 
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    if(!isset($_SESSION['user_type'])) {
        $_SESSION['loginnecessario'] = 'Faça o login para ter acesso as nossas aulinhas!';
        header('Location: ../../index.php');
        exit();
    }
?>