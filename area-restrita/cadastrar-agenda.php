<?php
    require_once("../classes/Agenda.php");
    require_once("../classes/Cliente.php");
    require_once("../classes/Servico.php");

    header("Location: agenda.php");


    $agenda = new Agenda();
    $agenda->setDataAgenda($_POST['dataAgenda']);
   
    $cliente = new Cliente();
    $cliente->setIdCliente($_POST['idcliente']);
    $agenda->setCliente($cliente);

    $servico = new Servico();
    $servico->setIdServico($_POST['idservico']);
    $agenda->setServico($servico);
     
   
   

    // echo($agenda->getCliente()->getIdCliente());
    $agenda->cadastrar($agenda);


?>