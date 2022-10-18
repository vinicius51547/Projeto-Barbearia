<?php
 
  $login = $_POST['txtLogin'];
  $senha = $_POST['txtSenha'];

  if( ($login == 'adm') &&  ($senha == '123')){
      session_start();
      $_SESSION['login-session'] = $login;
      $_SESSION['senha-session'] = $senha;

      header("Location:area-restrita/index-areaRestrita.php");

  }else{
      header ("Location:index.php?msg=<script>window.alert('cadastro incorreto')</script>");
  }

?>