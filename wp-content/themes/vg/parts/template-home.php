<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="full-row">
	
		    <main id="main" class="large-12 medium-12 columns no-p" role="main">
				
				<div class="secao-1 part-1 p-t-c" id="s1">
					<div class="row columns p-t-50 p-b-50">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h1><?php the_field('titulo'); ?></h1>
							<?php the_content(); ?>							
						<?php endwhile; endif; ?>
					</div>							
				</div>
				<div class="part-2 h-list-v p-t-c" id="s2">
					<div class="row columns p-t-50 p-b-50 vantagem">
						<h2 class="p-b-25"><?php echo the_field('titulo_v'); ?></h2>
						<?php if( have_rows('vantagens') ): ?>        
        					<ul>        
								<?php while( have_rows('vantagens') ): the_row(); 				  
									// vars
									$icone_v = get_sub_field('icone_v');
									$vantagem = get_sub_field('vantagem');
									$descricao_v = get_sub_field('descricao_v');									
								?>
								<li>
									<div class="vantagem-block">							
									<?php echo $icone_v ?>
									<h3><?php echo $vantagem ?></h3>
									<span class="text-justify"><?php echo $descricao_v ?></span>
									</div>
								</li>                
								<?php endwhile; ?>
							</ul>			
						<?php endif; ?>
					</div>	
				</div>

				<div class="duvidas p-t-50 p-b-50" id="s3">
					<h2 class="row p-b-25"><?php the_field('titulo_d'); ?></h2>
					<div class="row d-block">						
						<?php if( have_rows('duvidas') ): ?>        
        					<ul>        
								<?php while( have_rows('duvidas') ): the_row(); 				  
									// vars
									$duvida = get_sub_field('pergunta');
									$resposta = get_sub_field('resposta');																		
								?>
								<li>																
									<h3><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5LjUzNiAyOS41MzYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI5LjUzNiAyOS41MzY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTQuNzY4LDBDNi42MTEsMCwwLDYuNjA5LDAsMTQuNzY4YzAsOC4xNTUsNi42MTEsMTQuNzY3LDE0Ljc2OCwxNC43NjdzMTQuNzY4LTYuNjEyLDE0Ljc2OC0xNC43NjcgICBDMjkuNTM1LDYuNjA5LDIyLjkyNCwwLDE0Ljc2OCwweiBNMTQuNzY4LDI3LjEyNmMtNi44MjgsMC0xMi4zNjEtNS41MzItMTIuMzYxLTEyLjM1OWMwLTYuODI4LDUuNTMzLTEyLjM2MiwxMi4zNjEtMTIuMzYyICAgYzYuODI2LDAsMTIuMzU5LDUuNTM1LDEyLjM1OSwxMi4zNjJDMjcuMTI3LDIxLjU5NCwyMS41OTQsMjcuMTI2LDE0Ljc2OCwyNy4xMjZ6IiBmaWxsPSIjZmZjNjAwIi8+Cgk8cGF0aCBkPSJNMTQuMzg1LDE5LjMzN2MtMS4zMzgsMC0yLjI4OSwwLjk1MS0yLjI4OSwyLjM0YzAsMS4zMzYsMC45MjYsMi4zMzksMi4yODksMi4zMzljMS40MTQsMCwyLjMxNC0xLjAwMywyLjMxNC0yLjMzOSAgIEMxNi42NzIsMjAuMjg4LDE1Ljc3MSwxOS4zMzcsMTQuMzg1LDE5LjMzN3oiIGZpbGw9IiNmZmM2MDAiLz4KCTxwYXRoIGQ9Ik0xNC43NDIsNi4wOTJjLTEuODI0LDAtMy4zNCwwLjUxMy00LjI5MywxLjA1M2wwLjg3NSwyLjgwNGMwLjY2OC0wLjQ2MiwxLjY5Ny0wLjc3MiwyLjU0NS0wLjc3MiAgIGMxLjI4NSwwLjAyNywxLjg3OSwwLjY0NCwxLjg3OSwxLjU0M2MwLDAuODUtMC42NywxLjY5Ny0xLjQ5NCwyLjcwMWMtMS4xNTYsMS4zNjQtMS41OTQsMi43MDEtMS41MTYsNC4wMTJsMC4wMjUsMC42NjloMy40MiAgIHYtMC40NjNjLTAuMDI1LTEuMTU4LDAuMzg3LTIuMTYyLDEuMzExLTMuMjE1YzAuOTc5LTEuMDgsMi4yMTEtMi4zNjYsMi4yMTEtNC4zMjFDMTkuNzA1LDcuOTY4LDE4LjEzOSw2LjA5MiwxNC43NDIsNi4wOTJ6IiBmaWxsPSIjZmZjNjAwIi8+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /> 
									<?php echo $duvida ?></h3>
									<?php echo $resposta ?>									
								</li>                
								<?php endwhile; ?>
							</ul>			
						<?php endif; ?>
					</div>				
				</div>

				<div class="contato" id="s4">
					<div class="row columns p-t-50 p-b-50 p-t-c p-b-c text-center">
						<h2 class="p-b-25"><?php echo the_field('titulo_c'); ?></h2>
						<div class="row">
							<div class="large-6 columns">
								<h3><i class="fa fa-envelope"></i> Email</h3>
								<p><?php echo the_field('email'); ?></p>
							</div>
							<div class="large-6 columns">
								<h3><i class="fa fa-skype"></i> Skype</h3>
								<p><?php echo the_field('skype'); ?></p>
							</div>
						</div>						
						<h4 class="p-t-25"><?php echo the_field('horarios'); ?></h4>						
					</div>
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
