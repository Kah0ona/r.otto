<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="full-bg-home-top">
	<div class="u-gridContainer">
		<div class="u-gridRow">					
			<h3 class="welkom-tekst">Een bekwaam schilder in de regio Roosendaal</h3>
			<hr class="scheiding">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</div>
		<div class="u-gridRow">					
			<a href="/diensten"class="onze-diensten">ONZE DIENSTEN</a>
		</div>
	</div>
</div>

<div class="u-gridContainer">
	<div class="u-gridRow diensten">					
		<div class="u-gridCol4 dienst-area">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kwast.png"> 
			<p>Schilderwerk</p>
		</div>
		<div class="u-gridCol4 dienst-area">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hout.png">
			<p>Houtsanering</p> 
		</div>
		<div class="u-gridCol4 dienst-area">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hammer.png"> 
			<p>Timmerwerk</p>
		</div>
	</div>

	<div class="u-gridRow garanties-button">					
		<a href="/garanties"class="onze-garanties">ONZE GARANTIES</a>
	</div>
</div>

<div class="full-bg-home-bottom">
	<div class="u-gridContainer">
		<div class="u-gridRow garanties-area">	

		<div class="u-gridCol2 duim">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/duim.png"> 
		</div>		

		<div class="u-gridCol10">
			<p>
				Als vakkundige schilder in de regio Roosendaal heb ik als primair uitgangspunt het leveren van professionaliteit en 
				kwaliteit in alle diensten die ik bied. Deze combinatie garandeert voor ieder van mijn opdrachtgevers het beste 
				resultaat met betrekking tot mijn werk als schilder. Mijn jarenlange ervaring stelt mij bovendien in staat om volledig 
				te voldoen aan de verwachtingen van de klant Vanwege het feit dat ik een ervaren schilder ben, met een groot aantal 
				jaren ervaring, kan ik u garanderen dat het werk snel en met blijvend resultaat wordt voldaan. U hebt dus langer 
				profijt van mijn schilderswerkzaamheden, en kunt weer snel gebruik maken van uw huis of werkplek. Dit scheelt u 
				geld en zorgen. Want verf dat lang blijft zitten vergt weinig onderhoud. Ik gebruik de laatste technieken en de beste 
				verfmaterialen bij het uitvoeren van de werkzaamheden.
			</p>
		</div>	

		</div>
	</div>
</div>

<?php get_footer(); ?>
