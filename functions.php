<?php
add_action('login_head', 'custom_login_logo');
add_action('init', 'theme_custom_types');
add_filter('admin_footer_text', 'left_admin_footer_text_output');
add_filter('update_footer', 'right_admin_footer_text_output', 11);
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');

//add_action('wp_dashboard_setup', 'add_dashboard_widgets');
//add_action('admin_init', 'register_meta_boxes');
add_theme_support('category-thumbnails');
add_theme_support('post-thumbnails');
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
            array(
        'label' => 'Imagen Misi$oacute;n',
        'id' => 'secondary-image',
        'post_type' => 'post'
            )
    );
}
if (class_exists('MultiPostThumbnails')) :
    MultiPostThumbnails::the_post_thumbnail(
            get_post_type(), 'secondary-image'
    );
endif;

function debug($var, $stop = true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($stop)
        exit;
}

//Funcion que permite crear los Post Type
function add_custom_post_type($params, $generic = false) {


    if (is_int($params)) {
        global $post_types;
        $params = $post_types[$params];
    }

    if (!is_array($params)) {
        $params = array('type' => $params);
    }

    if ($generic) {
        $params = array_merge($params, array('singular' => 'publicaci&oacute;n',
            'plural' => 'publicaciones',
            'genero' => 'f'));
        if (!isset($params['supports'])) {
            $params['supports'] = array('title', 'editor', 'thumbnail');
        }
    }

    $type = $params['type'];
    $singular = (@$params['singular']) ? $params['singular'] : $type;
    $plural = (@$params['plural']) ? $params['plural'] : $singular . 's';
    $genero = (@$params['genero']) ? $params['genero'] : 'm';
    $supports = (@$params['supports']) ? $params['supports'] : array('title', 'editor', 'thumbnail');
    $menu_name = (@$params['menu_name']) ? $params['menu_name'] : ucfirst($plural);

    $labels = array(
        'name' => _x(ucfirst($plural), 'post type general name'),
        'singular_name' => _x(ucfirst($singular), 'post type singular name'),
        'add_new' => _x('A&ntilde;adir ' . (($genero == 'm') ? 'Nuevo' : 'Nueva'), $singular),
        'add_new_item' => 'A&ntilde;adir ' . (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'edit_item' => 'Editar ' . ucfirst($singular),
        'new_item' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'all_items' => (($genero == 'm') ? 'Todos los' : 'Todas las') . ' ' . ucfirst($plural),
        'view_item' => 'Ver ' . ucfirst($singular),
        'search_items' => 'Buscar ' . ucfirst($plural),
        'not_found' => 'No se encontaron ' . $plural,
        'not_found_in_trash' => 'No se encontaron ' . $plural . ' en la papelera',
        'parent_item_colon' => '',
        'menu_name' => $menu_name
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => $supports
    );
    register_post_type($params['type'], $args); //muestra la barra de la categoria, debe ser el mismo nombre del archivo php
}

//Funcion que permite crear las Categorias de los Post Type

function add_custom_taxonomy($params) {
    if (!is_array($params)) {
        $params = array('name' => $params);
    }
    $name = $params['name'];
    $singular = ($params['singular']) ? $params['singular'] : $name;
    $plural = isset($params['plural']) ? $params['plural'] : $singular . 's';
    $genero = ($params['genero']) ? $params['genero'] : 'm';
    $menu_name = isset($params['menu_name']) ? $params['menu_name'] : ucfirst($plural);

    $labels = array(
        'name' => _x(ucfirst($plural), 'taxonomy general name'),
        'singular_name' => _x(ucfirst($singular), 'taxonomy singular name'),
        'search_items' => __('Buscar ' . $plural),
        'all_items' => (($genero == 'm') ? 'Todos los' : 'Todas las') . ' ' . ucfirst($plural),
        'parent_item' => __('Parent ' . $singular),
        'parent_item_colon' => __('Parent ' . $singular . ':'),
        'edit_item' => 'Editar ' . ucfirst($singular),
        'update_item' => 'Actualizar ' . $singular,
        'add_new_item' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'new_item_name' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'menu_name' => $menu_name
    );


    if (isset($params['post_type']) && !is_array($params['post_type'])) {
        $post_type = array($params['post_type']);
    } elseif (isset($params['post_type']) && is_array($params['post_type'])) {
        $post_type = $params['post_type'];
    } else {
        $post_type = 'post';
    }

    $hierarchical = ($params['hierarchical']) ? $params['hierarchical'] : false;

    register_taxonomy($name, $post_type, array(
        'hierarchical' => $hierarchical,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => $name),
    ));
}

//Funcion que permite Cambiar el logo al iniciar sesion

function custom_login_logo() {
    $path = explode('/', get_bloginfo('template_directory'));
    $path[] = 'images';
    $ruta = ABSPATH . implode('/', array_slice($path, count($path) - 4)) . '/';
    if (!(file_exists($ruta . 'login_logo.png'))) {

        if (!is_dir($ruta))
            mkdir($ruta, 0777, true);

        $is_copied = @copy('http://proyectokamila.com/logo_in.png', $ruta . 'login_logo.png');

        if (!$is_copied) {
            $source = file_get_contents('http://proyectokamila.com/logo_in.png');
            $destiny = @fopen($ruta . 'login_logo.png', 'w');
            @fwrite($destiny, $source);
            @fclose($destiny);
        }
    }
    echo '<style type="text/css">h1 a { background-image:url(' . get_bloginfo('template_directory') . '/images/login_logo.png) !important; }</style>';
}

function left_admin_footer_text_output($text) {
    $text = get_bloginfo();
    return $text;
}

function right_admin_footer_text_output($text) {
    $text = 'Web Desarrollada por <a href="http://www.proyectokamila.com" target="_blank">Proyectokamila.com</a>';
    return $text;
}

if (!current_user_can('edit_users')) {
    add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

function custom_dashboard_widgets() {
    global $wp_meta_boxes;
    // var_dump( $wp_meta_boxes['dashboard'] );  
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}
function theme_custom_types() {
    add_custom_post_type(array(
    'type' => 'banner',
    'plural' => 'banner',
//    'supports' => array('thumbnail', 'title'),
));
add_custom_taxonomy(array(
    'name' => 'category_banner',
    'singular' => 'Categoria',
    'genero' => 'f',
    'post_type' => 'banner',
    'hierarchical' => true
));
}

//	debug(get_locale());
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup() {
//	load_theme_textdomain('my_theme', get_template_directory() . '/languages');
    load_theme_textdomain('f', get_template_directory() . '/languages');
}


function pagination($pages = '', $range = 4) {
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged))
        $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<ul class=\"pagination p\">";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<li><a class=\"home\" href='" . get_pagenum_link(1) . "'' aria-label='Next'><span aria-hidden='true'> &gt; </span></a></li>";
        if ($paged > 1 && $showitems < $pages)
            echo "<li><a class=\"after\" href='" . get_pagenum_link($paged - 1) . "'' aria-label='Next'><span aria-hidden='true'> &gt; </span></a></li>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<li><span class=\"current\">" . $i . "</span></li>" : "<li><a href='" . get_pagenum_link($i) . "' class=\"page-numbers\"> " . $i . "</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages)
            echo "<li><a class=\"before\" href=\'" . get_pagenum_link($paged + 1) . "'><span aria-hidden='true'> &gt; </span></a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            ;
        echo "<li><a class=\"end\" href='" . get_pagenum_link($wp_query->max_num_pages) . "' aria-label='Next'><span aria-hidden='true'> &gt; </span></a></li>";
        echo "</ul>\n";
    }
}

if (!is_admin()) {
    add_filter('locale', 'my_theme_localized');

    function my_theme_localized($locale) {
        # Definir la sesion si no está creada
        if (!isset($_SESSION['page_lang']))
            session_start();
        # Definir el español como idioma por defecto
        if (!isset($_SESSION['page_lang']))
            $_SESSION['page_lang'] = 'es_ES';
        # Definir el idioma seleccionado
        if (isset($_GET['l']) && ($_GET['l'] == 'en_EN' or $_GET['l'] == 'es_ES'))
            $_SESSION['page_lang'] = $_GET['l'];

        global $locale;
        $locale = $_SESSION['page_lang'];

        if (!defined('PAGE_LANG')) {
            define('PAGE_LANG', $locale);
        }
        return $locale;
    }

//	debug(get_locale());
}

function max_charlength($text, $charlength, $pad = '[...]', $strict = false) {
    $text = strip_tags($text);
    if (mb_strlen($text) > $charlength) {
        $subex = mb_substr($text, 0, $charlength - mb_strlen($pad));

        if ($strict) {
            $charlength++;
            $result = $subex;
        } else {

            $exwords = explode(' ', $subex);
            $excut = - ( mb_strlen($exwords[count($exwords) - 1]) );
            if ($excut < 0) {
                $result = mb_substr($subex, 0, $excut);
            } else {
                $result = $subex;
            }
        }
        $result .= $pad;
    } else {
        $result = $text;
    }
    return $result;
}

remove_shortcode('gallery', 'gallery_shortcode');

//activate own function
add_shortcode('gallery', 'cort');

function cort() {
    return;
}
