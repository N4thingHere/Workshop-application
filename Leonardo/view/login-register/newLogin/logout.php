<?php
    //abre a sessão
    session_start();
    
    //destrói as variáveis de sessão
    unset($_SESSION['login']);

    echo "<script>window.location.href = '../../indexaksdk.html';</script>";
?>

