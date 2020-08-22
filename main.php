<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

/* Classe de interação com o MySQL */
require_once "class/queries.class.php";
$cns = new ConsultaSQL();

$campos = "*";

$prox_vers = $cns->select($campos,$tb_prox_vers,'','');

$vers_at = $prox_vers->prox_at;
$vers_nt = $prox_vers->prox_nt;
$vers_sl_pv = $prox_vers->prox_sl_pv;

$condicoes = "idtb_versiculos = '$vers_at'";
$vers_at = $cns->select($campos,$tb_versiculos,$condicoes,'');
$condicoes = "idtb_livros = '$vers_at->idtb_livros'";
$livro_at = $cns->select($campos,$tb_livros,$condicoes,'');

$condicoes = "idtb_versiculos = '$vers_nt'";
$vers_nt = $cns->select($campos,$tb_versiculos,$condicoes,'');
$condicoes = "idtb_livros = '$vers_nt->idtb_livros'";
$livro_nt = $cns->select($campos,$tb_livros,$condicoes,'');

$condicoes = "idtb_versiculos = '$vers_sl_pv'";
$vers_sl_pv = $cns->select($campos,$tb_versiculos,$condicoes,'');
$condicoes = "idtb_livros = '$vers_sl_pv->idtb_livros'";
$livro_sl_pv = $cns->select($campos,$tb_livros,$condicoes,'');

?>

    <main role="main">

        <!-- Container Carousel -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/fundo_carousel_1a.jpg" />
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Antigo Testamento</h1>
                            <p class="btn btn-lg btn-success">
                                <?php echo "$vers_at->texto $livro_at->nome $vers_at->capitulo : 
                                    $vers_at->versiculo"; ?>
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Contexto</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/fundo_carousel_4a.jpg" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Novo Testamento</h1>
                            <p class="btn btn-lg btn-success">
                                <?php echo "$vers_nt->texto $livro_nt->nome $vers_nt->capitulo : 
                                    $vers_nt->versiculo"; ?>
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Contexto</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/fundo_carousel_3a.jpg" />
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Salmos e Provérbios.</h1>
                            <p class="btn btn-lg btn-success">
                                <?php echo "$vers_sl_pv->texto $livro_sl_pv->nome $vers_sl_pv->capitulo : 
                                    $vers_sl_pv->versiculo"; ?>
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Contexto</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Fim Container Carousel -->

        <!-- Container Conteúdo -->

        <div class="container marketing">

            <!-- Três colunas abaixo do carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/biblia03.png" height="140px" width="140px" />
                    <h2>NVI</h2>
                    <p>Nova Versão Internacional.</p>
                    <p><a class="btn btn-secondary" href="https://pt.wikipedia.org/wiki/Nova_Vers%C3%A3o_Internacional" 
                        role="button" target="_blanck">Saiba mais &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/biblia02.png" height="140px" width="140px" />
                    <h2>ACF</h2>
                    <p>Almeida Corrigida e Fiel.</p>
                    <p><a class="btn btn-secondary" href="https://pt.wikipedia.org/wiki/Almeida_Corrigida_Fiel" 
                        role="button" target="_blanck">Saiba mais &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/biblia01.png" height="140px" width="140px" />
                    <h2>ARA</h2>
                    <p>Almeida Revista e Atualizada.</p>
                    <p><a class="btn btn-secondary" href="https://pt.wikipedia.org/wiki/Almeida_Revista_e_Atualizada" 
                        role="button" target="_blanck">Saiba mais &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
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

            <hr class="featurette-divider">-->

            <!-- /Final dos Destaques -->

        </div>
        <!-- /.container -->