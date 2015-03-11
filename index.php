<?php get_header(''); ?>
<div class="container">
    <div class="row">
        <?php
        $query = query_posts(array('post_type' => "banner", 'posts_per_page' => 4));
//        debug($query);
        ?>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 slider">
            <?php if (!empty($query)) { ?>
                Ï<ul id="slider1">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <li data-animate="rotateInUpLeft, rotateOutUpRight"><?php the_content(); ?></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p>Aun no se han cargado Sliders. Muy pronto! espera lo nuevo.</p>
            <?php } ?>
        </div>
        <?php
        $query = query_posts(array('post_type' => "product", 'product_cat' => 'destacado', 'posts_per_page' => 4));
//        debug($query);
        ?>
        <?php
        if (!empty($query)) {
            $x = 0;
            ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="row">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <?php if ($x === 0) { ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 oferta box-offer-1">
                                <div class="oferta-producto-imagen">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>"/>
                                </div>
                                <div class="oferta-producto-description">
                                    <h2><?php the_titile(); ?></h2>
                                    <?php the_content(); ?>
                                </div>
                                <div class="oferta-precio">
                                    <?php // woocommerce_pri?>
                                </div>
                            </div>
                        <?php } ?>
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
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
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
<?php get_footer(''); ?>