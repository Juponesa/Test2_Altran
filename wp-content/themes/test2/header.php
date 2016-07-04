<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 2</title>

    <?php wp_head(); ?>
</head>
<body>
<!--Ad Widget Top-->
<div class="col-md-12 text-center ad-widget-top container">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('ad-widget-top')) : ?>
        <p>Ad widget 728px x 90px</p>
    <?php endif; ?>
</div>
<div class="clearfix"></div>
<div class="container">
    <header>
        <nav class="navbar main-navbar">
            <div class="container">
                <div class="navbar-header">
                    <div class="nav-search">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-search"
                                aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                        </button>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <figure><img src="<?php echo img_url(); ?>/logo-header.png" class="img-logo"
                                     alt="Logo Quatro Rodas"></figure>
                    </a>
                </div>
                <div id="navbar-search" class="navbar-collapse collapse hidden-lg hidden-md">
                    <form action="search" class="search hidden-lg hidden-md">
                        <label class="label-search" for="search">
                            <input type="search" placeholder="Pesquisar">
                        </label>
                    </form>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main-navbar-ul">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">CARROS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">TESTES <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">NOTÍCIAS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">AUTO-SERVIÇO <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">GUIA DE COMPRAS <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">TABELA FIPE <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ASSINE </a></li>
                        <li class="hidden-xs hidden-sm">
                            <form action="search" class="search">
                                <label for="search">
                                    <input type="search" placeholder="Pesquisar">
                                    <i class="fa fa-search"></i>
                                </label>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <nav class="container-fluid more-accessed hidden-xs hidden-sm">
            <div class="navbar-header">
                <a class="navbar-brand navbar-brand-more-accessed" href="<?php echo home_url(); ?>">
                    + ACESSADOS
                </a>
            </div>
            <div class="triangles">
                <div class="triangle red-triangle-1"></div>
                <div class="triangle black-triangle"></div>
                <div class="triangle red-triangle-2"></div>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">SALÃO DO AUTOMÓVEL </a></li>
                <li><a href="#">RENEGADE </a></li>
                <li><a href="#">NOVO SANDERO</a>
                <li><a href="#">NOVO FOX</a></li>
                <li><a href="#">NOVO KA</a></li>
                <li><a href="#">HB 20</a></li>
                <li><a href="#">DUSTER</a></li>
                <li><a href="#">GOLF</a></li>
                <li><a href="#">COROLLA</a></li>
                <li><a href="#">CIVIC</a></li>
                <li><a href="#">| A - Z |</a></li>
            </ul>
        </nav>


    </header>
    <div class="clearfix"></div>