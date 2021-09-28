<?php /* Template Name: Legal Page */ ?>

<?php get_header(); ?>

<main>
  <section class="content container">  
    <h1><?php wp_title('', true, 'right'); ?></h1>
    <?php the_content(); ?>
  </section>
</main>

<?php get_footer(); ?>