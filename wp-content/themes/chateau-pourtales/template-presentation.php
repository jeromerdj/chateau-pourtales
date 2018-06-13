<?php /* Template Name: Presentation Template */ get_header(); ?>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
			<section class="container-fluid haut-page d-flex align-items-center justify-content-center position-relative" style="background-image: url('<?php echo $imageData[0]; ?> ')">
				<div class="texte text-center  animated fadeInUp">
					<h1><?php the_title(); ?></h1>
					<img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">
					<h2> <?php the_field('sous-titre'); ?> </h2>
				</div>
				<div class="filet animated fadeInUp"></div>
			</section>
			<section class="container presentation-perso">
				<?php the_content(); ?>
				<div class="accordion" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Nos clients
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <?php the_field('champ_1'); ?>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Notre environnement
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				        <?php the_field('champ_2'); ?>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          L’histoire du Château
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        <?php the_field('champ_3'); ?>
				      </div>
				    </div>
				  </div>
				  <div class="card">
					<div class="card-header" id="heading4">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
						  L’équipe du Château
						</button>
					  </h5>
					</div>
					<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
					  <div class="card-body">
						<?php the_field('champ_4'); ?>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" id="heading5">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
						 Des partenaires solides
						</button>
					  </h5>
					</div>
					<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
					  <div class="card-body">
						<?php the_field('champ_5'); ?>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" id="heading6">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
						 Le Château comme lieu pour les séminaires, congrès et incentives
						</button>
					  </h5>
					</div>
					<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
					  <div class="card-body">
						<?php the_field('champ_6'); ?>
					  </div>
					</div>
				  </div>
				</div>



				<a href=" <?php the_permalink(12); ?> " class="btn-global">Découvrir nos forfaits</a>
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
