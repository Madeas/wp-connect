/* боковая колонка */
		<div class="col-md-4">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?> 
			<div id="sidebar" class="sidebar"> 
			<?php dynamic_sidebar( 'sidebar' ); ?> 
			</div> 
			<?php endif; ?>
		</div>
