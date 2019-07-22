<?php get_header(); ?>
    <body class="home">
      <main class="container">
        <header class="heading">
          <h1 class="page-title"><?php echo get_theme_mod('showcase_heading', 'ProDesk Industries'); ?></h1>
          <p class="description">
            <?php echo get_theme_mod('showcase_text', 'Witaj na stronie naszej firmy! Zajmujemy się tworzeniem oprogramowania dla dużych przedsiębiorstw w wielu branżach. Przejrzyj naszą ofertę i wybierz mądrze.'); ?>
          </p>
        </header>
        <div class="features">
          <section class="feature col-sm-4">
              <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
          </section>
          <section class="feature col-sm-4">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
          </section>
          <section class="feature col-sm-4">
              <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
          </section>
        </div>
        <a href="<?php bloginfo('template_url');?>/blog" class="btn btn-lg btn-success"><?php echo get_theme_mod('button_text', 'Przejdź do strony'); ?></a>
      </main>
<?php get_footer(); ?>
