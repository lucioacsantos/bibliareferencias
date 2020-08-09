<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Registro de Tabelas e Visões */
$tb_books="books";
$tb_testament="testament";
$tb_verses="verses";



/* Classe MySQLi */
class ConsultaSQL
{

    public function insert($tabela,$campos,$valores) 
    {
        require_once "mysqli.class.php";
        $my = new MySQL();
        $query = $my->exec("INSERT INTO $tabela ($campos) VALUES ($valores)");
        return $query;
    }

    public function update($tabela,$campos,$valores,$condicoes) 
    {
        require_once "mysqli.class.php";
        $my = new MySQL();
        $query = $my->exec("UPDATE $tabela SET ($campos) = ($valores) WHERE $condicoes");
        return $query;
    }

    public function select($tabela,$condicoes,$ordenacao)
    {
        require_once "mysqli.class.php";
        $my = new MySQL();

        if ($condicoes and $ordenacao){
            $query = $my->getRow("SELECT * FROM $tabela WHERE $condicoes ORDER BY $ordenacao");
        }
        elseif ($condicoes and !$ordenacao){
            $query = $my->getRow("SELECT * FROM $tabela WHERE $condicoes");
        }
        elseif (!$condicoes and $ordenacao){
            $query = $my->getRow("SELECT * FROM $tabela ORDER BY $ordenacao");
        }
        else{
            $query = $my->getRow("SELECT * FROM $tabela");
        }
        
        return $query;
    }

    public function selectMulti($tabela,$condicoes,$ordenacao)
    {
        require_once "mysqli.class.php";
        $my = new MySQL();

        if ($condicoes and $ordenacao){
            $query = $my->getRows("SELECT * FROM $tabela WHERE $condicoes ORDER BY $ordenacao");
        }
        elseif ($condicoes and !$ordenacao){
            $query = $my->getRows("SELECT * FROM $tabela WHERE $condicoes");
        }
        elseif (!$condicoes and $ordenacao){
            $query = $my->getRows("SELECT * FROM $tabela ORDER BY $ordenacao");
        }
        else{
            $query = $my->getRows("SELECT * FROM $tabela");
        }

        return $query;
    }

}
    
?>