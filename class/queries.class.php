<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Registro de Tabelas e Visões */
$tb_testamentos="tb_testamentos";
$tb_livros="tb_livros";
$tb_versiculos="tb_versiculos";
$tb_prox_vers="tb_prox_vers";


/* Classe MySQLi */
class ConsultaSQL
{

    public function SelectAllLivros()
    {
        require_once "mysqli.class.php";
        $my = new MySQL();
    }

    public function insert($tabela,$campos,$valores) 
    {
        require_once "mysqli.class.php";
        $my = new MySQL();
        $query = $my->exec("INSERT INTO $tabela ($campos) VALUES ($valores)");
        return $query;
    }

    public function update($tabela,$campos_valores,$condicoes) 
    {
        require_once "mysqli.class.php";
        $my = new MySQL();
        if ($condicoes){
            $query = $my->exec("UPDATE $tabela SET $campos_valores WHERE $condicoes");
        }
        else{
            $query = $my->exec("UPDATE $tabela SET $campos_valores ");
        }
        return $query;
    }

    public function select($campos,$tabela,$condicoes,$ordenacao)
    {
        require_once "mysqli.class.php";
        $my = new MySQL();

        if ($condicoes and $ordenacao){
            $query = $my->getRow("SELECT $campos FROM $tabela WHERE $condicoes ORDER BY $ordenacao");
        }
        elseif ($condicoes and !$ordenacao){
            $query = $my->getRow("SELECT $campos FROM $tabela WHERE $condicoes");
        }
        elseif (!$condicoes and $ordenacao){
            $query = $my->getRow("SELECT $campos FROM $tabela ORDER BY $ordenacao");
        }
        else{
            $query = $my->getRow("SELECT $campos FROM $tabela");
        }
        
        return $query;
    }

    public function selectMulti($campos,$tabela,$condicoes,$ordenacao)
    {
        require_once "mysqli.class.php";
        $my = new MySQL();

        if ($condicoes and $ordenacao){
            $query = $my->getRows("SELECT $campos FROM $tabela WHERE $condicoes ORDER BY $ordenacao");
        }
        elseif ($condicoes and !$ordenacao){
            $query = $my->getRows("SELECT $campos FROM $tabela WHERE $condicoes");
        }
        elseif (!$condicoes and $ordenacao){
            $query = $my->getRows("SELECT $campos FROM $tabela ORDER BY $ordenacao");
        }
        else{
            $query = $my->getRows("SELECT $campos FROM $tabela");
        }

        return $query;
    }

}
    
?>