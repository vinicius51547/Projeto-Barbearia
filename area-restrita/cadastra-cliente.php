<?php

    header("Location: cliente.php");
    
    require_once("../classes/Cliente.php");
    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['nomeCliente']);
    $cliente->setCpfCliente($_POST['cpfCliente']);
    $cliente->setCelularCliente($_POST['celularCliente']);

    echo("<br>");
    $cliente->cadastrar($cliente);
    
    
?>