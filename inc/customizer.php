<?php
  function prodesk_customize_register($wp_customize){
    $wp_customize->add_section('showcase', array(
      'title' => __('Modyfikuj', 'prodesk'),
      'description' => sprintf(__('Strona wejściowa - opcje', 'prodesk')),
      'priority' => 130
    ));

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('ProDesk Industries', 'prodesk'),
      'type' => 'theme_mod',

    ));
    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Nagłówek', 'prodesk'),
      'section' => 'showcase',
      'priority' => 1
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default' => _x('Witaj na stronie naszej firmy! Zajmujemy się tworzeniem oprogramowania dla dużych przedsiębiorstw w wielu branżach. Przejrzyj naszą ofertę i wybierz mądrze.','prodesk'),
      'type' => 'theme_mod',

    ));
    $wp_customize->add_control('showcase_text', array(
      'label' => __('Opis nagłówka', 'prodesk'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize->add_setting('button_text', array(
      'default' => _x('Przejdź do strony','prodesk'),
      'type' => 'theme_mod',

    ));
    $wp_customize->add_control('button_text', array(
      'label' => __('Tekst przycisku', 'prodesk'),
      'section' => 'showcase',
      'priority' => 3
    ));
  }

    add_action('customize_register','prodesk_customize_register');
 ?>
