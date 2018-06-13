<?php /* Template Name: Home Template */ get_header(); ?>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
			<section class="container-fluid intro-home d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $imageData[0]; ?> ')">
				<div class="filtre-black"></div>
				<div class="row text-center">
					<div class="col-12 textes animated fadeInUp">
						<p class="bienvenue">Bienvenue</p>
						<img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">
						<h1><?php the_title(); ?> </h1>
						<form class="reservation" action="index.html" method="post">
							<div>
								<label for="arrivee">Arrivée</label>
								<input type="date" id="arrivee" placeholder="Arrivée">
							</div>
							<div>
								<label for="depart">Départ</label>
								<input type="date" id="depart" placeholder="Départ">
							</div>

							<input type="submit" class="btn-global" value="Vérifier">
						</form>
					</div>
				</div>
				<div class="filet  animated fadeInUp"></div>
			</section>
			<section class="container evenements">
				<div class="row">
					<div class="col-12 mx-auto">
						<h2 class="text-center wow fadeInUp">Événements</h2>
						<p class="texte wow fadeInUp" data-wow-delay="0.2s"> <?php the_content(); ?> </p>
						<div class="row  wow fadeInUp" data-wow-delay="0.5s">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id(25) ); ?>
							<div class="col-lg-6 col-12 seminaire" style="background-image: url(' <?php  echo $url ?> ')">
								<div class="hover-carre"></div>
								<a href="#" class="nom-event"><img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x"></span> <?php echo get_the_title(25); ?></a>
							</div>
							<div class="col-lg-6 col-md-12">
								<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id(32) ); ?>
								<div class="col-lg-12 parc" style="background-image: url(' <?php  echo $url2 ?> ')">
									<div class="hover-carre"></div>
									<a href="#" class="nom-event"><img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x"></span> <?php echo get_the_title(32); ?></a>
								</div>

								<?php $url3 = wp_get_attachment_url( get_post_thumbnail_id(33) ); ?>
								<div class="col-lg-12 give" style="background-image: url(' <?php  echo $url3 ?> ')">
									<div class="hover-carre"></div>
									<a href="#" class="nom-event"><img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x"></span> <?php echo get_the_title(33); ?></a>
								</div>
							</div>
						</div>
						<a href="#" class="float-right plus-infos">Plus d'informations ›</a>
					</div>
				</div>
			</section>
			<div class="container-fluid actualites-fond wow fadeInUp" data-wow-delay="0.1s">
				<section class="container actualites">
					<div class="row">
						<div class="col-lg-12 col-sm-12 mx-auto">
							<h2 class="text-center wow fadeInUp" data-wow-delay="0.2s">Actualités</h2>
							<div class="row wow fadeInUp" data-wow-delay="0.4s">
								<?php
									$posts = get_posts( array(
									'posts_per_page' => 3,
									'post_type' => 'post', // Type articles
									'category' => '3', // ID de la catégorie qui contient les articles
									'post_status' => 'publish', // statut public uniquement
									'orderby' => 'post_date', // trier par date
									'order' => 'DESC' // trier par date décroissante
									));

									foreach( $posts as $post) {
									echo '<div class="col-lg-4 col-12 single-actu">';
										echo get_the_post_thumbnail($post->ID);
										echo '<div  class="ss-img">';
											echo  '<h3>'.get_the_title($post->ID).'</h3>';
											echo  '<p>'.get_the_excerpt($post->ID).'</p>';
											echo '<a href="#" class=" suite"> Lire la suite ›</a>';
										echo '</div>';
									echo '</div>';
									}
								?>

							</div>
							<div class="text-center">
								 <a href="#" class="btn-global text-center;">Plus d'actualités</a>
							</div>
						</div>

					</div>
				</section>
			</div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

<?php get_footer(); ?>
