<?php get_header(); ?>

<main class="single">
  <div class="inner">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1 class="single__title"><?php the_title(); ?></h1>

      <div class="single__meta">
        <p class="single__date"><?php echo get_the_date('Y/m/d'); ?></p>
        <p class="single__cat">
          <?php
            $cat = get_the_category();
            echo $cat ? $cat[0]->name : '';
          ?>
        </p>
      </div>

      <div class="single__thumb">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
      </div>

      <div class="single__content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; endif; ?>

  </div>
</main>

<?php get_footer(); ?>
