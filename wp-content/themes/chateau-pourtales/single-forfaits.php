<?php get_header(); ?>


	<!-- section -->


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="forfait-seul" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
			<section class="container-fluid haut-page d-flex align-items-center justify-content-center position-relative" style="background-image: url('<?php echo $imageData[0]; ?> ')">
				<div class="filtre-black"></div>
				<div class="texte text-center animated fadeInUp">
					<h1><?php the_title(); ?></h1>
					<img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">
					<h2> <?php the_excerpt(); ?> </h2>
				</div>
				<div class="filet animated fadeInUp"></div>
			</section>
			<section class="texte-forfait container">
				<div class="row">
					<div class="col-lg-12">
						<p><?php the_content(); ?> </p>
						<article class="comprend"> <?php the_field('comprend'); ?> </article>
						<p class="prix"><?php the_field('prix-forfait'); ?></p>
					</div>
				</div>
			</section>

			<section class="container autres-forfaits">
				<hr>
				<h3 class="wow fadeInUp" data-wow-delay="0.1s">Les forfaits qui peuvent aussi vous intéresser </h3>
				<div class="row wow fadeInUp" data-wow-delay="0.2s">
					<?php
						$forfaits = get_posts( array(
						'posts_per_page' => 4,
						'post_type' => 'forfaits', // Type articles
						'post_status' => 'publish', // statut public uniquement
						'orderby' => 'post_date', // trier par date
						'order' => 'DESC', // trier par date décroissante
						'exclude' => get_the_ID(),
						));

						foreach( $forfaits as $forfait) {
						$imageData2 = wp_get_attachment_image_src(get_post_thumbnail_id ( $forfait->ID ), '');
						echo '<div class="col-lg-3 col-12 single-forfait" style="background-image: url('. $imageData2[0] . ' )">';
							echo  '<h3><a href="'. get_the_permalink($forfait->ID)  .'"> <img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">'.get_the_title($forfait->ID).'</a></h3>';
							echo '<div class="gradient-black"></div>';
						echo '</div>';
						}
					?>
				</div>
			</section>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>



<?php get_footer(); ?>
