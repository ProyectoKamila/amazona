<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title(); ?></title>
        <link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet' type='text/css'> 
        <!-- Anything Slider -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/scripts/slider/css/anythingslider.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/scripts/slider/css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/bootstrap/dist/css/bootstrap.css">

        <?php wp_head(); ?>
    </head>
    <body>
        <header class="menu navbar-fixed-top hidden-sm hidden-xs" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mini-bar"></div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

                                <a><div class="redes twitter"></div></a>
                                <a><div class="redes facebook"></div></a>
                                <a><div class="redes google"></div></a>

                            </div>
                            <div class="col-lg-8 col-md-8 hidden-sm hidden-xs content-nav">
                                <ul class="nav nav-pills">
                                    <li role="presentation"  class="content-form">
                                        <form class="search-form">
                                            <input name="s" id="s" type="text"/>
                                            <input type="submit" name="Buscar" class="buscar" value="Buscar" /></form>
                                        <a href="#" id="busqueda"><img src="<?php bloginfo('template_url'); ?>/images/general/lupa.png" alt="lupa" class="lupa"/></a>
                                    </li>

                                    <li role="presentation"><a href="<?php home_url('mi-cuenta'); ?>">Iniciar Sesion</a></li>
                                    <li role="presentation"><a href="<?php home_url('mi-cuenta'); ?>">Mi Cuenta</a></li>
                                    <li role="presentation"><a href="<?php home_url('contacto'); ?>">Contacto</a></li>
                                    <li role="presentation"><a href="<?php home_url('nosotros'); ?>">Nosotros</a></li>

                                </ul>
                            </div>
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs ">
                                <div class="content-cart">
                                    <div class="item">00</div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs ">
                                <div class="content-whish">
                                    <div class="item">00</div>
                                </div>
                            </div>
                            <div class="clearfix bordeado"></div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 logo">

                                <a href="<?php home_url(''); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/general/logo.png" alt="Amazona Paralelo"/>
                                </a>

                            </div>
                            <div class="col-lg-10 col-md-10 hidden-sm hidden-xs categories-list">
                                <ul class="nav nav-pills">
                                    <li role="presentation" ><a href="#">Tecnologia</a></li>
                                    <li role="presentation"><a href="#">Ropa</a></li>
                                    <li role="presentation" ><a href="#">Tecnologia</a></li>
                                    <li role="presentation"><a href="#">Ropa</a></li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                            Belleza <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>

                                        </ul>
                                    </li>
                                    <li role="presentation"><a href="#">Libros</a></li>
                                    <li role="presentation"><a href="#">Arte</a></li>
                                    <li role="presentation"><a href="#">Libros</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="menu-movil navbar-fixed-top hidden-lg hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 redes">
                        <img src="<?php bloginfo('template_url'); ?>/images/general/carta.png" alt="redes"/>
                        <img src="<?php bloginfo('template_url'); ?>/images/general/carta.png" alt="redes"/>
                        <img src="<?php bloginfo('template_url'); ?>/images/general/carta.png" alt="redes"/>
                    </div>
                    <div class="col-sm-6 col-xs-6 logo">
                        <img src="<?php bloginfo('template_url'); ?>/images/general/logo.png" alt="Amazona Paralelo"/>
                    </div>
                    <div class="col-xs-2  col-sm-2  ">
                        <div id="boton-categoria" class="movil-boton">
                            <span class=" glyphicon glyphicon-th" aria-hidden="true"></span>  
                        </div>
                    </div>
                    <div class="col-xs-2  col-sm-2  ">
                        <div class="movil-boton">
                            <span class=" glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-xs-2  col-sm-2  ">
                        <div class="movil-boton">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div id="menu-categorias" class="hidden-lg hidden-md col-sm-12 col-xs-12">
                        <ul class="nav nav-pills">

                            <li role="presentation"><a href="#">Iniciar Sesion</a></li>
                            <li role="presentation"><a href="#">Mi Cuenta</a></li>
                            <li role="presentation"><a href="#">Contacto</a></li>
                            <li role="presentation"><a href="#">Nosotros</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </header>

