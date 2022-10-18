<?php

//senha do banco : aulapw2ds

class Conexao
{
    public static function conectar()
    {
        /*
            $variavel = new PDO(
                tipo:host=local; 
                dbname=nome do banco,
                usuário de acesso ao banco, 
                senha de acesso ao banco
            )
        */
        //conexão local
        $conexao = new PDO("mysql:host=localhost;
                            dbname=bdsalao2ds", 
                            "root",
                            "");
        
        //conexão on line - hospedado
        // $conexao = new PDO("mysql:host=fdb22.awardspace.net;
        //                     dbname=3178009_bdsalao2ds", 
        //                     "3178009_bdsalao2ds",
        //                     "aulapw2ds");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        
        return $conexao;
    }
}