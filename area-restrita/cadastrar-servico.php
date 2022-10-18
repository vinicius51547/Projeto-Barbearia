<?php
    require_once('../classes/Servico.php');

    header("Location: servico.php");

    $servico = new Servico();

    $servico->setDescServico($_POST['descServico']);
    $servico->setTextoServico($_POST['textoServico']);
    
    $nome = $_FILES['fotoServico']['name'];
    
    $arquivo = $_FILES['fotoServico']['tmp_name'];

    $caminhoimagem = "imagens/servico/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $servico->setFotoServico($caminhoimagem);

    $servico->cadastrar($servico);
        
?>