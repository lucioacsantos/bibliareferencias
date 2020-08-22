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

            <!-- Início dos destaques -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2>Pentateuco - Livros da Lei</h2>
                    <p>É composto pelos cinco primeiros livros da bíblia dispostos em ordem cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Gênesis &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Êxodo &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Levítico &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Números &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Deuteronômio &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <img src="img/pentateuco.png" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2>História de Israel</h2>
                    <p>Este grupo de livros é composto por 12 livros que relatam toda a história de Israel, 
                        desde a entrada até a conquista da terra prometida Canaã. Também estão em ordem cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">José &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Juízes &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Rute &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">I Samuel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Samuel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">I Reis &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Reis &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">I Crônicas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">II Crônicas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Esdras &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Neemias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Ester &raquo;</a></p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/historicos.png" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2>Cânticos & Poéticos</h2>
                    <p>É composto por 5 livros, sendo estes escritos em forma de cânticos ou literatura poética. 
                        Estes não estão organizados cronologicamente e sim pela sua relevância.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Jó &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Salmos &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Provérbios &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Eclesiastes &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Cantares &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <img src="img/poeticos.png" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7  order-md-2">
                    <h2>Proféticos - Profetas Maiores</h2>
                    <p>São 5 livros que relatam a história dos profetas que mais profetizaram na história de Israel. 
                        Estão expostos em ordem de relevância e não em cronológica.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Isaias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Jeremias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Lamentações &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Ezequiel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Daniel &raquo;</a></p>
                </div>
                <div class="col-md-5  order-md-1">
                    <img src="img/profetas_maiores.png" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                <h2>Proféticos - Profetas Menores</h2>
                    <p>Este é o último grupo de livros do antigo testamento e está dividido em 12 livros que contam a 
                        história e ministérios de 12 grandes profetas de Israel.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ośeias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Joel &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Amós &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Obadias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Jonas &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Miquéias &raquo;</a></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Naum &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Habacuque &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Sofonias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Ageu &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Zacarias &raquo;</a>
                        <a class="btn btn-secondary" href="#" role="button">Malaquias &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <img src="img/profetas_menores.png" />
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /Final dos Destaques -->
            
        </div>
        <!-- /.container -->

<?php

include "foot.php";

?>

<!--
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Livro</th>
                <th scope="col">NIP/CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Nome de Guerra</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tr>
            <th scope="row">".$value->sigla_espec."</th>
            <td>".$identificacao."</td>
            <td>".$value->nome."</td>
            <td>".$value->nome_guerra."</td>
            <td><a href=\"?cmd=admin&act=cad&param=".$value->idtb_pessoal_ti."\">Editar</a> - 
                <a href=\"?cmd=admin&act=cad&param=".$value->idtb_pessoal_ti."&senha=troca\">Senha</a> - 
                    Excluir</td>
        </tr>
    </tbody>
    </table>
</div>
-->