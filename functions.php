<?php
function leander_bronnen() {
  wp_enqueue_style('google fonts', '//fonts.googleapis.com/css?family=Poller+One|Roboto&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'leander_bronnen');
//widgets
function leander_widgets() {
  register_sidebar( array(
    'name' => __( 'Widget aside' ),
    'id' => __('widget_aside'),
    'description' => __('Hier de widgets voor die aside plaatsen'),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>'
  ) );
}
add_action('widgets_init', 'leander_widgets');
 ?>
