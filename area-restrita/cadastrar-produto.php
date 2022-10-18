<?php
    require_once('../classes/Produto.php');

    header("Location: produto.php");

    $produto = new Produto();

    $produto->setDescProduto($_POST['descProduto']);
    $produto->setTextoProduto($_POST['textoProduto']);
    
    $nome = $_FILES['fotoProduto']['name'];
    
    $arquivo = $_FILES['fotoProduto']['tmp_name'];

    $caminhoimagem = "imagens/produto/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $produto->setFotoProduto($caminhoimagem);

    $produto->cadastrar($produto);
        
?>