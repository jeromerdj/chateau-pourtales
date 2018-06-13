<?php /* Template Name:  Forfaits Template */ get_header(); ?>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
			<section class="container-fluid haut-page d-flex align-items-center justify-content-center position-relative" style="background-image: url('<?php echo $imageData[0]; ?> ')">
				<div class="texte text-center  animated fadeInUp">
					<h1><?php the_title(); ?></h1>
					<img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">
					<h2> <?php the_field('sous-titre'); ?> </h2>
				</div>
				<div class="filet  animated fadeInUp"></div>
			</section>
			<section class="container forfaits1">
				<h2 class="text-center">Découvrez nos forfaits</h2>
				<p class="description"> <?php the_content(); ?> </p>
				<div class="row">
					<?php
						$forfaits = get_posts( array(
						'posts_per_page' => 6,
						'post_type' => 'forfaits', // Type articles
						'post_status' => 'publish', // statut public uniquement
						'orderby' => 'post_date', // trier par date
						'order' => 'DESC' // trier par date décroissante
						));

						foreach( $forfaits as $forfait) {
						$imageData2 = wp_get_attachment_image_src(get_post_thumbnail_id ( $forfait->ID ), '');
						echo '<div class="col-lg-4 col-12 single-forfait" style="background-image: url('. $imageData2[0] . ' )">';
							echo  '<h3><a href="'. get_the_permalink($forfait->ID)  .'"> <img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">'.get_the_title($forfait->ID).'</a></h3>';
							echo '<div class="gradient-black"></div>';
						echo '</div>';
						}
					?>
				</div>
				<div class="row forfait-cadeau">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id(85) ); ?>
					<div class="col-lg-12 cadeau" style="background-image: url(' <?php  echo $url ?> ')">
						<?php echo  '<h3><a href="'. get_the_permalink(85)  .'"> <img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">'.get_the_title(85).'</a></h3>'; ?>
					<div>
				</div>
			</section>


		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

<?php get_footer(); ?>
