<?php

get_header(); ?>

	<!-- site-content -->

    <div class="img-container">
<!--        <iframe width="420" height="315" src="https://www.youtube.com/embed/KEkrWRHCDQU" frameborder="0" </iframe>-->
    </div>

    <!-- site-content -->


    <section class="site-content clearfix">

        <div class="content-threefold widget-area">
            <div class="section-heading">
                <h1>Threefolds</h1>
            </div>
            <?php if (is_active_sidebar('part1')) : ?>
                <div class="threefold-widget">
                    <?php dynamic_sidebar('part1'); ?>
                </div>
            <?php endif ?>
            <?php if (is_active_sidebar('part1')) : ?>
                    <div class="threefold-widget">
                        <?php dynamic_sidebar('part2'); ?>
                    </div>
            <?php endif ?>
            <?php if (is_active_sidebar('part1')) : ?>
                <div class="threefold-widget">
                    <?php dynamic_sidebar('part3'); ?>
                </div>
            <?php endif ?>
        </div>
    </section>

    <section>
    <div id="container">
        <?php

        // The Query
        $query = new WP_Query( array(
            'category_name' => 'portfolio',
        ));

        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>
                <div class="blog-posted">
                    <div class="image-left">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </div>
                    <div class="portfolio content">
                        <h2><?php the_title() ?></h2>
                    </div>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php }
        } else {
            // no posts found
        }
        ?>


    </section>
	<?php get_footer();
?>