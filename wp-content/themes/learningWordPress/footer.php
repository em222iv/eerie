	<footer class="site-footer">

		<!-- footer-widgets -->
        <div class="container">
        <div class="footer-widgets clearfix">

            <?php if (is_active_sidebar('footer1')) : ?>

                <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer1'); ?>
                </div>

            <?php endif; ?>

            <?php if (is_active_sidebar('footer2')) : ?>

                <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer2'); ?>
                </div>

            <?php endif; ?>

            <?php if (is_active_sidebar('footer3')) : ?>

                <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer3'); ?>
                </div>

            <?php endif; ?>


        </div><!-- /footer-widgets -->

            </div>

<!--        <p>--><?php //bloginfo('name'); ?><!-- - &copy; --><?php //echo date('Y');?><!--</p>-->

    </footer>



<?php wp_footer(); ?>
</body>
</html>