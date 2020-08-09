<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();


$livros = $cns->selectMulti($tb_books,'','');

?>


<div class="table-responsive">
  <table class="table table-hover">
      <thead>
          <tr>
              <th scope="col">Nome</th>
              <th scope="col">Abreviação</th>
              <th scope="col">Ações</th>
          </tr>
      </thead>
<?php 
  foreach ($livros as $key => $value) {
      echo"<tr>
          <th scope=\"row\">".$value->name."</th>
          <td>".$value->abbrev."</td>
          <td><a href=\"?cmd=livro&act=cad&param=".$value->id."\">Editar</a> - 
              Excluir</td>
      </tr>";
  }
?>