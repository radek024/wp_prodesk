<?php get_header(); ?>
    <body class="blog">

        <header class="heading">
          <div class="container">
            <h1 class="page-title"><a href="<?php bloginfo('url');?>">Blog <?php bloginfo('name'); ?></a></h1>
              <h2><?php if (is_category()) : ?>
                Kategoria: <?php single_cat_title(); ?>
              <?php endif; ?></h2>
          </div>
        </header>
        <main class="news-tabs">
          <div class="container">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post() ?>
          <a href="<?php the_permalink(); ?>">
            <?php
              $thumb;
              $thumb1;
              if(has_post_thumbnail())
              {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                $thumb1=$thumb['0'];
              }else $thumb1=get_template_directory_uri().'/img/gallery-03.jpg';

            ?>
            <section class="news col-xs-12 col-sm-6 col-md-4" style="background-image: url('<?php echo $thumb1;?>')">
              <h2 class="news-title"><?php the_title(); ?></h2>
            </section>
          </a>
        <?php endwhile; ?>
        <?php else: ?>
          <p>
            <?php __('Brak postów'); ?>
          </p>
        <?php endif; ?>
        </div>
      </main>
      <?php get_footer(); ?>
