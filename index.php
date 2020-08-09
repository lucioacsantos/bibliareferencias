<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();

$url = 'http://localhost/bibliareferencias/';

/* Carrega Estrutura das Páginas */
include "head.php";

include "main.php";

include "foot.php";

?>