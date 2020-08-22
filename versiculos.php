<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/*ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);*/   

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();

@$livro = $_GET["livro"];
@$capitulo = $_GET["capitulo"];
if ($capitulo == ''){ $capitulo = 1;}
$condicao = "idtb_livros='$livro'";
$livro = $cns->select('*',$tb_livros,$condicao,'');

$campos = "capitulo AS capitulos";
$condicao = "idtb_livros='$livro->idtb_livros' GROUP BY capitulo";
$capitulos = $cns->selectMulti($campos,$tb_versiculos,$condicao,'');

$campos = "versiculo, texto";
$condicao = "idtb_livros='$livro->idtb_livros' AND capitulo='$capitulo'";
$versiculos = $cns->selectMulti($campos,$tb_versiculos,$condicao,'');

/* Carrega Estrutura das Páginas */
include "head.php";

include "top_main.php";

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
            <h2><?php print $livro->nome; ?></h2>
            <p><?php print $livro->descricao; ?>.</p>
            <p class="btn btn-secondary" role="button">Capítulos &raquo;</p>
            <p>
            <?php
            foreach ($capitulos as $key => $value){
                echo "<a href=\"versiculos.php?livro=$livro->idtb_livros&capitulo=$value->capitulos\"> 
                    $value->capitulos  &raquo; </a>";
            }
            ?>
            </p>
        </div>
        <div class="col-md-5">
            <img src="img/evangelhos.png" />
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2>Capítulo <?php echo $capitulo; ?></h2>
            <?php
            foreach ($versiculos as $key => $value){
                echo"<p>$value->versiculo : $value->texto.</p>";
            }
            ?>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="img/historico.png" />
        </div>
    </div>



<?php

include "foot.php";

?>