<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar top" id="top-bar-menu">
	<div class="row columns h-list v-center">		
			<ul class="show-for-medium">				
				<li><a href="<?php echo home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/logos/logo-sogi.png"></a></li>
				<li><?php joints_top_nav(); ?></li>
			</ul>		
		<div class="top-bar-right float-right show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a href="<?php echo home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/logos/logo-sogi.png"></a></li>
				<li class="small-offset-3"><a data-toggle="off-canvas"><?php _e( '<i class="fa fa-bars"></i>', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>