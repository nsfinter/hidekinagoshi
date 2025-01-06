<?php 
// CSSの読み込み
function my_stylesheets(){
  // リセットCSS
  wp_enqueue_style('reset', get_stylesheet_directory_uri() .'/css/reset.css', '1.0.0', false);

  // Google Fonts
  wp_enqueue_style('googlefonts-notosansjp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('googlefonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

  // FontAwesome
  wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');
  wp_enqueue_style('fontawesome-brands', 'https://use.fontawesome.com/releases/v6.4.2/css/brands.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.4.2/css/fontawesome.css');

  // メインのCSS
  wp_enqueue_style('main-style', get_stylesheet_directory_uri() .'/style.css', array('reset'), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'my_stylesheets');

// JavaScriptの読み込み
function my_scripts(){
  // jQuery
  wp_enqueue_script('jquery-min-js', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

  // メインのjsファイル
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() .'/js/script.js', array('jquery-min-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_scripts');
