<?php
if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
    <div id="footer-widget-area" class="chw-widget-area widget-area" role="complementary">
	<?php dynamic_sidebar( 'custom-footer-widget' ); 
?>
