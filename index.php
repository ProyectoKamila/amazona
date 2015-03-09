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
                                <div class="redes twitter"></div>
                                <div class="redes facebook"></div>
                                <div class="redes instagram"></div>
                            </div>
                            <div class="col-lg-8 col-md-8 hidden-sm hidden-xs content-nav">
                                <ul class="nav nav-pills">
                                    <li role="presentation"  class="content-form">
                                        <form class="search-form">
                                            <input name="s" id="s" type="text"/>
                                            <input type="submit" name="Buscar" class="buscar" value="Buscar" /></form>
                                        <a href="#" id="busqueda"><img src="<?php bloginfo('template_url'); ?>/images/general/lupa.png" alt="lupa" class="lupa"/></a>
                                    </li>
                                    <li role="presentation"><a href="#">Iniciar Sesion</a></li>
                                    <li role="presentation"><a href="#">Mi Cuenta</a></li>
                                    <li role="presentation"><a href="#">Contacto</a></li>
                                    <li role="presentation"><a href="#">Nosotros</a></li>
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
                                <img src="<?php bloginfo('template_url'); ?>/images/general/logo.png" alt="Amazona Paralelo"/>
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

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 slider">
                    <ul id="slider1">
                        <li data-animate="rotateInUpLeft, rotateOutUpRight"><iframe title="YouTube video player" width="480" height="385" src="http://www.youtube.com/embed/MbgESLvjaMI" frameborder="0" allowfullscreen></iframe></li>
                        <li data-animate="rotateInUpLeft, rotateOutUpRight"><img src="<?php bloginfo('template_url') ?>/scripts/slider/demos/images/slide-env-1.jpg" alt=""></li>
                        <li data-animate="rotateInUpLeft, rotateOutUpRight"><img src="<?php bloginfo('template_url') ?>/scripts/slider/demos/images/slide-civil-2.jpg" alt=""></li>
                        <li data-animate="rotateInUpLeft, rotateOutUpRight"><img src="<?php bloginfo('template_url') ?>/scripts/slider/demos/images/slide-env-2.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 oferta box-offer-1">
                            <div class="oferta-producto-imagen">
                                <img src="<?php bloginfo('template_url'); ?>/images/temporal/silla.png" alt="Silla"/>
                            </div>
                            <div class="oferta-producto-description">
                                <h2>Silla Verde titulo de producto</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy tex</p>
                            </div>
                            <div class="oferta-precio">
                                99.2$
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 oferta box-offer-2">
                            <div class="oferta-producto-imagen">
                                <img src="<?php bloginfo('template_url'); ?>/images/temporal/silla.png" alt="Silla"/>
                            </div>
                            <div class="oferta-producto-description visible-sm visible-xs">
                                <h2>Silla Verde titulo de producto</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy tex</p>
                            </div>
                            <div class="oferta-precio">
                                99.2$
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 oferta box-offer-3">
                            <div class="oferta-producto-imagen">
                                <img src="<?php bloginfo('template_url'); ?>/images/temporal/silla.png" alt="Silla"/>
                            </div>
                            <div class="oferta-producto-description visible-sm visible-xs">
                                <h2>Silla Verde titulo de producto</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy tex</p>
                            </div>
                            <div class="oferta-precio">
                                99.2$
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="home-productos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titulo-divisor">
                        Lo mejor de
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home-producto">
                        <ul id="foo2">
                            <?php for ($i = 0; $i < 8; $i++) { ?>
                                <li >
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                        <div class="producto">
                                            <div class="producto-imagen">
                                                <img src="<?php bloginfo('template_url'); ?>/images/temporal/silla.png" alt="Silla"/>
                                            </div>
                                            <p>This product title</p>
                                            <div class="producto-precio"></div>
                                            <div class="producto-wishlist"></div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 title-marca">
                        <h2>Los productos y marcas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="producto-marcas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                        <ul>
                            <li> <img src="<?php bloginfo('template_url'); ?>/images/general/ubicacion.png" alt="Ubicacion"/> 
                                <p>galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                            </li>
                            <li> <img src="<?php bloginfo('template_url'); ?>/images/general/carta.png" alt="Ubicacion"/> 
                                <p>lipsum@lipsum.com</p>
                            </li>
                            <li> <img src="<?php bloginfo('template_url'); ?>/images/general/telefono.png" alt="Ubicacion"/> 
                                <p>5555-555-55-55</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <?php for ($i = 0; $i < 9; $i++) { ?>
                                <div class="col-sm-3 col-md-3 col-lg-4 col-xs-6">
                                    <a href="#" class="thumbnail">
                                        <img src="<?php bloginfo('template_url') ?>/images/temporal/item1.png" alt="categoria">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                        <ul class="nav nav-pills">

                            <li role="presentation"><a href="#">Iniciar Sesion</a></li>
                            <li role="presentation"><a href="#">Mi Cuenta</a></li>
                            <li role="presentation"><a href="#">Contacto</a></li>
                            <li role="presentation"><a href="#">Nosotros</a></li>
                            <li role="presentation" ><a href="#">Tecnologia</a></li>
                            <li role="presentation"><a href="#">Ropa</a></li>
                            <li role="presentation" ><a href="#">Tecnologia</a></li>
                            <li role="presentation"><a href="#">Ropa</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 logo-footer">
                        <img src="<?php bloginfo('template_url');?>/images/general/logo-footer.png" alt="Amazona Paralele"/>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-10 col-xs-12 text-copy">
                        <p>Copyright © 2015 www.amazonaparalelo.com Todos los derechos reservados</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copy">
                        <p>Desarrollado por <a href="http://www.proyectokamila.com">Proyecto Kamila C.A</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body> 
    <?php wp_footer(); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/scripts/main.js"></script>
    <script src="<?php bloginfo('template_url') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/scripts/slider/js/jquery.anythingslider.js"></script>
    <script src="<?php bloginfo('template_url') ?>/scripts/slider/js/jquery.anythingslider.fx.js"></script>
    <!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
    <script src="<?php bloginfo('template_url') ?>/scripts/slider/js/jquery.anythingslider.video.js"></script>
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/scripts/carrusel/jquery.carouFredSel-6.2.1-packed.js"></script>    <!-- optionally include helper plugins -->
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/scripts/carrusel/helper-plugins/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url') ?>/scripts/carrusel/helper-plugins/jquery.touchSwipe.min.js"></script>

</html>