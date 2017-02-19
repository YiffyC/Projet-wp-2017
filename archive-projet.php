<?php get_header(); ?>
<div col
<div class="container">
<div class="projets">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="projet">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <h1 class="title">
            <?php the_title(); ?>
        </h1>
        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
