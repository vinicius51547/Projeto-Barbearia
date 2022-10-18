<?php
    session_start();
    if( ($_SESSION['login-session'] != 'adm') || ($_SESSION['senha-session'] !='123')) {
        header("Location:../index.php?msg=<script>window.alert('Acesso Encerrado')</script>");  
    }else{
    }
?>