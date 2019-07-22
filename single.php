<?php get_header(); ?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <body class="post">
      <div class="container">
        <h1 class="page-title"><a href="<?php bloginfo('url');?>">Blog <?php bloginfo('name'); ?></a></h1>
        <div class="col-md-8">
        <header class="heading">
          <?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "thumb-photo col-xs-12")); ?>
          <h2 class="post-title"><?php the_title(); ?></h1>
          <div class="metadata"> napisał
            <span class="name"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
            </a></span>
            <span class="date"><?php the_time('F j, Y H:i'); ?></span>
              <?php echo get_the_category_list(); ?>
          </div>
        </header>
        <main>
          <?php the_content(); ?>
          <?php comments_template(); ?>
        </main>
        </div>
        <div class="col-md-4 text-center">
          <aside class="container">
            <div class="about-author"><?php echo get_avatar( get_the_author_meta('ID'), 128); ?>
              <div class="author-text">
                <h2 class="name"><?php the_author(); ?></h2>
                <p class="author-desc"><?php echo get_the_author_meta('description'); ?></p>
              </div>
            </div>
            <!-- <h2 class="categories-title">Kategorie</h2>
            <ul class="categories">
              <li class="category"><a href="" class="cat-link">Kategoria 01</a></li>
              <li class="category"><a href="" class="cat-link">Kategoria 02</a></li>
              <li class="category"><a href="" class="cat-link">Kategoria 03</a></li>
              <li class="category"><a href="" class="cat-link">Kategoria 04</a></li>
            </ul> -->
            <?php if(is_active_sidebar('sidebar')) : ?>
              <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
          </aside>
        </div>
      </div>
    <?php endwhile ?>
    <?php endif; ?>
<?php get_footer(); ?>
