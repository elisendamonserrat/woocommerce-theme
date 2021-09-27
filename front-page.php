<?php get_header();?>

<main>
    <section class="hero">
        <?php echo do_shortcode('[smartslider3 slider="3"]'); ?> 
    </section>
    <section class="content container">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </section>
</main>

<?php get_footer();?>
 