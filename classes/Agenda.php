<?php
    require_once("Cliente.php");
    require_once("Servico.php");

    class Agenda{
        private $idagenda;
        private $dataagenda;

        private $cliente;
        private $servico;

        public function setIdAgenda($idagenda){
            $this->idagenda = $idagenda;
        }
        public function setDataAgenda($dataagenda){
            $this->dataagenda = $dataagenda;
        }
        public function setHoraAgenda($horaagenda){
            $this->horaagenda = $horaagenda;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }

        public function getIdAgenda(){
            return $this->idagenda;
        }
        public function getDataAgenda(){
            return $this->dataagenda;
        }
        public function getHoraAgenda(){
            return $this->horaagenda;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        public function getCliente(){
            return $this->cliente;
        }

        public function setServico($servico){
            $this->servico = $servico;
        }
        public function getServico(){
            return $this->servico;
        }



        public function cadastrar($agenda){
            $conexao = Conexao::conectar();
            //prepare statement
            $stmt = $conexao->prepare("INSERT INTO tbagenda (dataAgenda,horaagenda, idCliente, idServico)
                                        VALUES(?, ?, ?, ?)");
            $stmt->bindValue(1, $agenda->getDataAgenda());
            $stmt->bindValue(2, $agenda->getHoraAgenda());
            $stmt->bindValue(3, $agenda->getCliente()->getIdCliente());
            $stmt->bindValue(4, $agenda->getServico()->getIdServico());            
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idagenda, date_format(dataagenda, '%d/%m/%Y') as dataagenda, date_format(horaagenda, '%H:%i') as horaagenda,  tbcliente.nomecliente , tbservico.descservico 
            FROM tbagenda
            INNER JOIN tbservico
                ON tbagenda.idservico = tbservico.idservico
            INNER JOIN tbcliente
                ON tbagenda.idcliente = tbcliente.idcliente";

            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   

            
        }
    }
