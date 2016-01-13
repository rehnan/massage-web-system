<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TulioMassoterapia
 */

?>

	
	<footer class="rodape">

		<div class="row">

			<!-- ENDEREÇO /CONTATO-->
			<div class="col-md-4">
				
				<!-- TÍTULO -->
				<div class="titulo-footer">
					<p>Nosso <span>Endeço </span><i class="fa fa-location-arrow"></i></p>	
				</div>

				<div class="contato">

					<span><i class="fa fa-phone"></i>: (41)9744-8978</span>
					
					<span><i class="fa fa-map-marker"></i>: Avenida da República 4250 - Parolin, Curitiba - PR </span>
					
					<span><i class="fa fa-envelope"></i>: quickmassage.tulio@gmail.com</span>

				</div>

			</div>
			
			<!-- REDES SOCIAIS -->
			<div class="col-md-4">
				
				<div class="titulo-footer">
					<p>Redes <span>Sociais </span><i class="fa fa-users"></i></p>	
				</div>
				
				<div class="redes-sociais">
					
					<span><a href="https://www.facebook.com/tulio.carolino" target="blan_k"><i class="fa fa-facebook"></i></a></span>
					<span><a href="https://www.instagram.com/carolinotulio/" target="blan_k"><i class="fa fa-instagram"></i></a></span>
					<span><a href="https://apps.google.com/intx/pt-BR/products/googleplus/?utm_medium=cpc&utm_source=google&utm_campaign=latam-br-pt-gafw-bkws-all-trial-e&utm_term=google%2B" target="blan_k"><i class="fa fa-google-plus"></i></a></span>

				</div>

			</div>

			<!-- FORMULARIO CONTATO -->
			<div class="col-md-4">

				<div class="titulo-footer">
					<p>Receba <span>Novidade !</span> <i class="fa fa-paper-plane"></i></p>	
				</div>
			
				<div class="novidades">
					
					<div class="form-group">
					    <label for="nome" class="hidden">Nome:</label>
					    <input type="nome" class="form-control"  placeholder="Seu nome..." id="nome">
 					 </div>

 					 <div class="form-group">
					    <label for="email" class="hidden">Email:</label>
					    <input type="email" class="form-control"  placeholder="Seu email..." id="email">
 					 </div>
					
					  <button type="submit" class="btn btn-default">Assinar !</button>

				</div>
			
			</div>
		
		</div>
		
	</footer>
	
	<div class="termos">

		<p>© Copyright 2015</small> Túlio Tobias - Todos os direitos reservados.</p><small>

	</div>

<?php wp_footer(); ?>

</body>
</html>
