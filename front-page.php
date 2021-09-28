<?php get_header();?>

<main>
    <section>
        <?php echo do_shortcode('[smartslider3 slider="4"]'); ?> 
    </section>
    <section class="content container">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </section>
</main>

<?php get_footer();?>
 