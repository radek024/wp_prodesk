<?php
  //Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  //Theme support
  function theme_setup(){
    //Nav menus

    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

  }

  function wpb_init_widgets($id){
    register_sidebar(array(
      'name'  => 'Sidebar',
      'id'    => 'sidebar',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="categories-title">',
      'after_title'   => '</h2>'
    ));

    register_sidebar(array(
      'name'  => 'Box1',
      'id'    => 'box1',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));
    register_sidebar(array(
      'name'  => 'Box2',
      'id'    => 'box2',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));
    register_sidebar(array(
      'name'  => 'Box3',
      'id'    => 'box3',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'wpb_init_widgets');
  add_action('after_setup_theme', 'theme_setup');

  add_theme_support('post-thumbnails');
  add_theme_support('custom-background');

  add_filter('next_posts_link_attributes', 'next_page');
  add_filter('previous_posts_link_attributes', 'previous_page');

  function next_page() {
      return 'class="pagination next"';
  }

  function previous_page() {
      return 'class="pagination previous"';
  }

  //Customizer File
  require get_template_directory().'/inc/customizer.php';

 ?>
