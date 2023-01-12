<?php   
    require_once('../classes/Conexao.php');

    // Excluir Cliente
    if(isset($_GET['excluirCliente'])){
        
        header("Location: cliente.php");
        $id = $_GET['excluirCliente'];
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbcliente WHERE idcliente = '$id'");
        $stmt->execute();
    }

    // Excluir Produto
    if(isset($_GET['excluirProduto'])){
            
        header("Location: produto.php");
        $id = $_GET['excluirProduto'];
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbproduto WHERE idProduto = '$id'");
        $stmt->execute();
                
    }

    // Excluir Serviço
    if(isset($_GET['excluirServico'])){
        
        header("Location: servico.php");
        $id = $_GET['excluirServico'];
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbservico WHERE idServico = '$id'");
        $stmt->execute();
                   
    }

    // Excluir Agenda
    if(isset($_GET['excluirAgenda'])){

        header("Location: agenda.php");
        $id = $_GET['excluirAgenda'];
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbagenda WHERE idAgenda = '$id'");
        $stmt->execute();
                   
    }
    
    

?>
