
function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Нижняя часть сайта',
		'id'            => 'custom-footer-widget',
		'before_widget' => '<div class="col-6 col-md">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );
