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

            <!-- Três colunas -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/pentateuco.png" />
                    <h2>Livros da Lei</h2>
                    <p>É composto pelos cinco primeiros livros da bíblia dispostos em ordem cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Gênesis &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Êxodo &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Levítico &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Números &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Deuteronômio &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/historicos.png" />
                    <h2>História de Israel</h2>
                    <p>Este grupo de livros é composto por 12 livros que relatam toda a história de Israel, 
                        desde a entrada até a conquista da terra prometida Canaã. Também estão em ordem cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">José &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Juízes &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Rute &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Samuel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Samuel &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Reis &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Reis &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/historicos.png" />
                    <h2>História de Israel</h2>
                    <p>Este grupo de livros é composto por 12 livros que relatam toda a história de Israel, 
                        desde a entrada até a conquista da terra prometida Canaã. Também estão em ordem cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Crônicas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Crônicas &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Esdras &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Neemias &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ester &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- Três colunas -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/poeticos.png" />
                    <h2>Cânticos</h2>
                    <p>É composto por 5 livros, sendo estes escritos em forma de cânticos ou literatura poética. 
                        Estes não estão organizados cronologicamente e sim pela sua relevância.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Jó &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Salmos &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Provérbios &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Eclesiastes &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Cantares &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/profetas_maiores.png" />
                    <h2>Proféticos</h2>
                    <p>São 5 livros que relatam a história dos profetas que mais profetizaram na história de Israel. 
                        Estão expostos em ordem de relevância e não em cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Isaias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Jeremias &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Lamentações &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Ezequiel &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Daniel &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/profetas_menores.png" />
                    <h2>Proféticos</h2>
                    <p>Este é o último grupo de livros do antigo testamento e está dividido em 12 livros que contam a 
                        história e ministérios de 12 grandes profetas de Israel.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ośeias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Joel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Amós &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Obadias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Jonas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Miquéias &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Naum &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Habacuque &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Sofonias &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ageu &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Zacarias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Malaquias &raquo;</a></p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Início dos destaques -->

            <!--<hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod 
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" 
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" 
                        fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis 
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" 
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" 
                        fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod 
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" 
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" 
                        fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /Final dos Destaques -->

        </div>
        <!-- /.container -->


<?php

include "foot.php";

?>