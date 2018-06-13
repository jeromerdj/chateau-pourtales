<?php /* Template Name: Contact Page Template */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
    <section class="container-fluid haut-page d-flex align-items-center justify-content-center position-relative" style="background-image: url('<?php echo $imageData[0]; ?> ')">
        <div class="filtre-black"></div>
        <div class="texte text-center animated fadeInUp">
            <h1><?php the_title(); ?></h1>
            <img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/x.png" alt="x">
            <h2> <?php the_field('sous-titre'); ?> </h2>
        </div>
        <div class="filet animated fadeInUp"></div>
    </section>
    <section class="container form-contact">
        <div class="row">
            <div class="col-lg-12">
                <p>En remplissant ce formulaire, vous acceptez de nous communiquer des données personnelles. Après 6 mois nous les supprimerons.</p>
                <?php echo do_shortcode('[contact-form-7 id="110" title="Formulaire de contact 1"]'); ?>
            </div>
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
