<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();

/* Carrega Estrutura das Páginas */
include "head.php";

include "top_main.php";

$pesquisa = $_POST["pesquisa"];
if ($pesquisa == NULL){
    $result = NULL;
}
else{
    $condicao = "texto LIKE '%$pesquisa%'";
    $result = $cns->selectMulti('*',$tb_versiculos,$condicao,'');
}

?>

<main>

<!-- Container Carousel -->

<div id="superior" class="carousel slide">
    
</div>

<!-- Fim Container Carousel -->

<!-- Container Conteúdo -->

<div class="container marketing">

<!-- Início dos destaques -->

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <?php
        if ($result != NULL){
            echo "
            <h2>Sua pesquisa retornou o seguinte:</h2>
            <!--<p class=\"btn btn-secondary\" role=\"button\">Capítulos &raquo;</p>-->
            <p>";
            foreach ($result as $key => $value){
                $condicao = "idtb_livros='$value->idtb_livros'";
                $livro = $cns->select('*',$tb_livros,$condicao,'');
                echo "<p>$livro->nome $value->capitulo : $value->versiculo - $value->texto</p>";
            }
            echo "</p>";
        }
        else{
            echo "<h2>Sua pesquisa não retornou resultados, tente novamente.</h2>";
        }
        ?>
        
    </div>
    <div class="col-md-5">
        <img src="img/versiculos.png" />
    </div>
</div>

<hr class="featurette-divider">

<?php

include "foot.php";

?>