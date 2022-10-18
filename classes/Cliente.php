<?php

    require_once("Conexao.php");

    class Cliente{
        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $celularCliente;

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }

        public function getCelularCliente(){
            return $this->celularCliente;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }

        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }

        public function setCpfCliente($cpfCliente){
            $this->cpfCliente = $cpfCliente;
        }

        public function setCelularCliente($celularCliente){
            $this->celularCliente = $celularCliente;
        }

        public function cadastrar($cliente){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbCliente (nomeCliente, cpfCliente, celularCliente)
                                        VALUES(?, ?, ?)");
            $stmt->bindValue(1, $cliente->getNomeCliente()); 
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->execute();

            // return "Cadastro realizado com sucesso";
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idcliente, nomecliente, cpfcliente, celularcliente FROM tbcliente";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
    }
?>