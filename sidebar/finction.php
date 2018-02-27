function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
function right_sidebar() {
 
	$args = array(
		'id'            => 'sidebar-right',
		'name'          => __( 'Правая колонка', 'striped' ),
		'description'   => __( 'Перетащите сюда виджеты, чтобы добавить их', 'striped' ),
		'class'         => 'striped-widget',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
 
} 
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'right_sidebar' );
