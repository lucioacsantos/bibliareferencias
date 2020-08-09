<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Inicializa Sessão */
session_start();

/* Função para Verificar Login */
function isLoggedIn(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false;
    }
    return true;
}

/* Classe MySQLi */
class MySQL
{
    /* Declaração de Variáveis */
    private $db;
    public  $num_rows;
    public  $last_id;
    public  $aff_rows;
    public function __construct()
    {
        require 'config.inc.php';
        $this->db = new mysqli($host,$username,$password,$database);

        // Check connection
        if ($this->db -> connect_errno) {
          echo "Conexão falhou MySQL: " . $this->db -> connect_error;
          exit();
        }
    }
    public function close()
    {
        $this->db -> close();
    }
    // SELECT
    // Retorna uma linha como objeto
    public function getRow($sql)
    {
        $result = $this->db -> query($sql);
        $row = $result -> fetch_object();
        if ($this->db -> error) exit($this->db -> error);
        return $row;
    }
    // SELECT
    // Retorna array com várias linhas
    public function getRows($sql)
    {
        $result = $this->db -> query($sql);
        if ($this->db -> error) exit($this->db -> error);
        $this->num_rows = $this->db -> affected_rows;
        $rows = array();
        while ($item = $result -> fetch_object()) {
            $rows[] = $item;
        }
        return $rows;
    }
    // SELECT
    // Retorna valor de uma coluna como string
    public function getCol($sql)
    {
        $result = $this->db -> query($sql);
        $col = $result -> fetch_row();
        if ($this->db -> error) exit($this->db -> error);
        return $col;
    }
    // SELECT
    // Retorna array com todos os valores da coluna
    public function getColValues($sql)
    {
        $result = $this->db -> query($sql);
        $arr = $result -> fetch_all();
        if ($this->db -> error) exit($this->db -> error);
        return $arr;
    }
    // INSERT
    // Retorna último id $id
    public function insert($sql, $id='id')
    {
        $sql .= ' RETURNING '.$id;
        $result = $this->db -> query($sql);
        if ($this->db -> error) exit($this->db -> error);
        $this->last_id = $result -> insert_id();
        return $this->last_id;
    }
    // UPDATE, DELETE e CREATE TABLE
    // Retorna número de linhas afetadas
    public function exec($sql)
    {
        $result = $this->db -> query($sql);
        if ($this->db -> error) exit($this->db -> error);
        $this->aff_rows = $result -> affected_rows();
        return $this->aff_rows;
    }
}