<?php
/**
*** 99242991 | Lúcio ALEXANDRE Correia dos Santos
**/

?>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Bíblia Referências</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="antigotestamento.php">Antigo Testamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novotestamento.php">Novo Testamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bibliografia.php">Bibliografia</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" action="pesquisa.php" method="post" enctype="multipart/form-data">
                    <input class="form-control mr-sm-2" type="text" placeholder="Sua pesquisa" 
                        aria-label="Search" name="pesquisa" id="pesquisa">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Localizar</button>
                </form>
            </div>
        </nav>
    </header>
