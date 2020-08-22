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
                    <img src="img/evangelhos.png" />
                    <h2>Biografia de Jesus</h2>
                    <p>É composto por 4 livros que narram a passagem de Jesus na terra, desde o seu nascimento, obra, 
                        ministério, redenção até a sua acessão aos céus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Mateus &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Marcos &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Lucas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">João &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/historico.png" />
                    <h2>Apóstolos</h2>
                    <p>É composto por apenas um livro que conta a história dos apóstolos e instituição da primeira 
                        igreja cristã na terra, a igreja primitiva.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Atos dos Apóstolos &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/revelacoes.png" />
                    <h2>Profético</h2>
                    <p>Este grupo é composto por penas um livro que trás toda a revelação dos últimos acontecimentos 
                        da igreja na terra. É o ultimo livro da Bíblia.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Apocalipse &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- Três colunas -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/epistolas.png" />
                    <h2>Cartas</h2>
                    <p>São Cartas escritas pelos apóstolos e direcionadas às igrejas de várias cidades, nações e 
                        continentes da terra.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Romanos &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">I Coríntios &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">II Coríntios &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Gálatas &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Efésios &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Felipenses &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Colossenses &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/epistolas.png" />
                    <h2>Cartas</h2>
                    <p>Estes livros estão organizados em ordem cronológica, sendo as 13 primeiras do apóstolo Paulo.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Tessalonossenses &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">II Tessalonossenses &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">I Temóteo &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">II Temóteo &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Tito &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Filemon &raquo;</a>
                        
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/epistolas.png" />
                    <h2>Cartas</h2>
                    <p>Além das 13 escritas pelo apóstolo Paulo, existem outras 8 escritas por autores diversos,
                        em um total de 21 cartas.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Hebreus &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Tiago &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Pedro &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Pedro &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">I João &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II João &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">III João &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Judas &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                
            </div>
            <!-- /.row -->

<?php

include "foot.php";

?>