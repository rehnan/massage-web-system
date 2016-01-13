<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TulioMassoterapia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<!-- TOPO -->
	<header class="topo">

		<div id="owl-demo">
      		<?php 

				$destaquesPost = new WP_Query( array( 'post_type' => 'destaques', 'orderby' => 'id', 'order' => 'asc', 'posts_per_page' => -1 ) );
                
                while ( $destaquesPost->have_posts() ) : $destaquesPost->the_post();
				
				$foto = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$foto = $foto[0];

			?>
				<div class="item" style="background: url(<?php echo "$foto";?> ">
					<div class="row">
					<div class="col-md-12">
						<div class="frase">

								<span><i><?php echo the_title(); ?> </i></span>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); ?>	
				

				
				
				
		</div>

		
	

		<header class="area-topo">

			<div class="navbar" role="navigation">

				<div class="container">

					<!-- MENU MOBILE TRIGGER -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- LOGOTIPO / MENU MOBILE-->
					<div class="row navbar-header">


						<!-- LOGO -->
						<div class="col-md-4">
							<a href="#" title="Stetica">
								<h1 class="img-responsive">
									Túlio Tobias Massoterapeuta
								</h1>
							</a>
						
						</div>

						<!-- MENU -->
						<div class="col-md-8">

							<nav class="collapse navbar-collapse" id="collapse">

								<ul class="nav navbar-nav">

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Massagem estética<span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Drenagem</a></li>
											<li><a href="#">Relaxante </a></li>
											<li><a href="#">Desportiva</a></li>
											
											
										</ul>
									</li>

								

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Terapêutica  <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Reflexologia </a></li>
											<li><a href="#">Drenagem Linfática</a></li>
											
											
											<li><a href="#">Quick Massage</a></li>
											
										</ul>
									</li>


									<li><a href="#">Blog</a></li>

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Estética facial</a></li>
											<li><a href="#">Micropig Estética</a></li>
											<li><a href="#">Micropig. paramédica</a></li>
										</ul>
									</li>
									
									<li><a href="#">Quem Somos</a></li>
									<li><a href="#">Contato</a></li>

								</ul>

							</nav>
							
						</div>

					</div>

				</div>

				

			</div>
		
		</header>
	
	</header>
	<div id="content" class="site-content">
