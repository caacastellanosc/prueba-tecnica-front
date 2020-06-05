<?php
/*
Plugin Name: Creacion de Subtitulos
Description: Crea un Subtitulo en una pagina
Author: Alejandro Castellanos 
Author URI: https://github.com/caacastellanosc
*/

add_action("admin_menu", "plugin_subtitulo");

function plugin_subtitulo() {
  add_menu_page('Plugin de prueba', 'Plugin de Prueba', 'manage_options', 'menu_creacion_sub', 'crear_subtitulo');
}

$t = $_POST['textosub'];
function crear_subtitulo() {
  if($_POST && $_POST['textosub']) {
    $texto = $_POST['textosub'];
    if(update_option('valor_sub', $texto)) {
      echo "<p>El correo $texto fue agregado con exito</p>";
    } else {
      echo '<p>No se pudo configurar el texto del pie</p>';
    }
  }
  include('formulario-sub.php');
}

  function subscribe_link_shortcode() {
	  $nn = get_option('valor_sub');
    return '<h1 class="text-center"><p>' . $nn . '</p></h1>';
}


add_shortcode( 'subtitule_prueba', 'subscribe_link_shortcode' );
add_action('wp_title', 'agregar_subtitulo');


function agregar_subtitulo() {
  if($texto_pie = get_option('valor_sub')) {
    echo "<h1>{$texto_pie}</h1>";
  }
}
