<?php get_header(); ?>

<main>
  <section class="content container">
    <div class="post-image"> 
      <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="post-image__img">
    </div>
    
    <h1><?php wp_title('', true, 'right'); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    else : endif; ?>
  </section>
</main>

<?php get_footer(); ?>