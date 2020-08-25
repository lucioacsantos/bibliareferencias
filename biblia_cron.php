<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();

$campos = "*";
$prox_vers = $cns->select($campos,$tb_prox_vers,'','');
$prox_at = $prox_vers->prox_at;
$prox_nt = $prox_vers->prox_nt;
$prox_sl_pv = $prox_vers->prox_sl_pv;

if ($prox_at < 23145){
    $prox_at++;
}
else{
    $prox_at = 1;
}

if ($prox_nt < 31102){
    $prox_nt++;
}
else{
    $prox_nt = 1;
}

if ($prox_sl_pv < 17316){
    $prox_sl_pv++;
}
else{
    $prox_sl_pv = 16405;
}

$campos_valores = "prox_at=$prox_at, prox_nt=$prox_nt, prox_sl_pv=$prox_sl_pv";
$upd = $cns->update($tb_prox_vers,$campos_valores,'');

?>