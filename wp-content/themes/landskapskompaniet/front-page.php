<?php

get_header(); ?>

<?php
    if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<!--    <div id="myCarousel" class="carousel slide" data-ride="carousel">-->

                <div class="content">
                    <?php the_content(); ?>
                </div>


<!--    </div>-->

<?php endwhile;

else :
echo '<p>No content found</p>';

endif;
?>
    <div id="introduction-container" class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-heading">Landskapskompaniet</h3>
                <h4 class="section-subheading text-muted"><p>Vi hjälper er med träd, skog och grönytor</p></h4>
            </div>
        </div>
        <hr>
    </div>
    <div class="container marketing">
        <div class="row">
            <div id="welcome-contact-content" class="col-lg-4">

                <h2>Kontakta oss</h2>
                <p>Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!</p>
            </div>
            <div class="col-lg-4">
                <a href="https://www.facebook.com/landskapskompaniet?fref=ts"><img id="facebook-picture" class="img-circle" src=""></a>
                <h2>Denna fungerar endast på <a href="http://landskapskompaniet.se">huvudsiten</a></h2>
                <p id="faceboook-message"></p>
                <div class="fb-like" data-href="https://www.facebook.com/landskapskompaniet?fref=ts" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="col-lg-4">
                <a class="group" rel="group1" href="https://instagram.com/explore/tags/landskapskompaniet/"><img id="instagram-picture" class="img-circle" alt="Generic placeholder image" src=""></a>
                <h2>Instagram</h2>
                <div id="instagram-text"></div>
            </div>
        </div>
    </div>

	<?php get_footer();
?>