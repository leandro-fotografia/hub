<?php
/**
 * 
 * Functions php
 */

define('ASSETS', get_stylesheet_directory_uri() . '/assets/');

function setAssets() {
    // Css's
    wp_enqueue_style('bootstrap', ASSETS. 'lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font', ASSETS. 'lib/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('animate', ASSETS. 'lib/animate/animate.min.css');
    wp_enqueue_style('ionicons', ASSETS. 'lib/ionicons/css/ionicons.min.css');
    wp_enqueue_style('owlcarousel', ASSETS. 'lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('lightbox', ASSETS. 'lib/lightbox/css/lightbox.min.css');
    wp_enqueue_style('style-theme', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('style', ASSETS. 'css/style.css');

    // Js's
    wp_enqueue_script('jquery', ASSETS.'lib/jquery/jquery.min.js');
    wp_enqueue_script('jquery-migrate', ASSETS.'lib/jquery/jquery-migrate.min.js');
    wp_enqueue_script('bootstrap', ASSETS.'lib/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('easing', ASSETS.'lib/easing/easing.min.js');
    wp_enqueue_script('mobile', ASSETS.'lib/mobile-nav/mobile-nav.js');
    wp_enqueue_script('wow', ASSETS.'lib/wow/wow.min.js', '', '', true );
    wp_enqueue_script('waypoints', ASSETS.'lib/waypoints/waypoints.min.js');
    wp_enqueue_script('counterup', ASSETS.'lib/counterup/counterup.min.js');
    wp_enqueue_script('owlcarousel', ASSETS.'lib/owlcarousel/owl.carousel.min.js', '', '', true );
    wp_enqueue_script('isotope', ASSETS.'lib/isotope/isotope.pkgd.min.js');
    wp_enqueue_script('lightbox', ASSETS.'lib/lightbox/js/lightbox.min.js');
    wp_enqueue_script('contact', ASSETS.'contactform/contactform.js');
    wp_enqueue_script('main', ASSETS.'js/main.js', '', '', true );

    // Teste vocacional
    wp_enqueue_script('teste-vocacional-inicio', ASSETS.'js/form-inicio-teste.js');
    wp_enqueue_script('teste-vocacional-js', ASSETS.'js/teste-vocacional.js');
    wp_enqueue_style('teste-vocacional-css', ASSETS.'css/teste-vocacional.css');

    // Setar ajaxurl
    wp_localize_script( 'teste-vocacional-inicio', 'wpobj',
        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts', 'setAssets');

function phpinclude($file) {
    $param = shortcode_atts(array (
        'file' => 'file'
    ), $file);

    ob_start();
    $dir = get_stylesheet_directory();
    include ($dir . "/assets/{$param['file']}.php");
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

add_shortcode('phpinclude', 'phpinclude');

function salva_dados_teste() {
    $message = '';
    
    try {
        global $wpdb;
        $usuario = $_POST['usuario'];
        $wpdb->insert('teste_vocacional_usuarios', $usuario);
        
        $message = 'Dados salvos com sucesso!';
    } catch (\Exepction $e) {
        $message = "Houve um erro: {$e->getMessage()}";
    }

    echo json_encode(['message' => $message]);
    exit;
}

add_action('wp_ajax_salva_dados_teste', 'salva_dados_teste');
add_action('wp_ajax_nopriv_salva_dados_teste', 'salva_dados_teste');