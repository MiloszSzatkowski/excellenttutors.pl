<?php
/*
	Template Name: Nasza_Kadra
*/
?>

<?php get_header(); ?>

  <section class="" style="height:5.2em;  border-top:2px solid lightgrey;
  border-bottom:2px solid lightgrey; background:rgba(0,0,0,0.051);
  margin-top:3.2px; ">

    <h2 style="width:100%; text-align:center; padding-top:0.7em;">
      <?php the_field( 'page_title' ); ?>
    </h2>

  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-12 pad-bottom">
        <p class="pad-bottom"
        style="width:100%;text-align:center; padding-top:1.3em;">
          <?php the_field( 'opis_strony' ); ?>
        </p>
      </div>



      <!-- Pętla profili tutorów -->
      <?php
      $args1X = array( 'post_type' => 'tutorzy', 'posts_per_page' => 20 );
      $loop1X = new WP_Query( $args1X );

      while ( $loop1X->have_posts() ) : $loop1X->the_post();?>

      <div class="col-md-12 col-lg-6" style="">
        <div class="" style="padding:20px;">
          <div class="row text-box" style="">

            <div class="col-md-12">
              <h3 class="dark-gold" style="padding:0.5em; text-align:center;">
                <?php the_field( 'tutor_name' ); ?></h3>
            </div>

            <div class="col-xs-12 col-md-4">

              <?php if ( get_field( 'tutor_profile_image') ) { ?>
                  <p class="text-center">
                    <img
                    class="faded"
                    src="<?php the_field( 'tutor_profile_image' ); ?>"
                    style="width:100%;
                    max-width:150px;
                    "/>
                  </p>
                <?php } ?>

                <div class="">
                  <br>
                  <p class="text-center" style="font-size:0.9em; padding: 0 1em 0 1em;">Przedmioty, których naucza tutor:</p>
                  <p class="text-center" style="font-size:0.9em; font-weight: 600;">
                    <?php // przedmioty_tutora
                      $field = get_field_object( 'przedmioty_tutora' );
                      $value = $field['value'];
                      $choices = $field['choices'];
                      if ( $value ):
                        foreach ( $value as $v ):
                          echo $choices[ $v ];
                          echo " </br> ";
                        endforeach;
                      endif; ?>
                  </p>
                </div>
            </div>

            <div class="col-xs-12 col-md-8" style="font-size:0.85em;">
              <?php the_field( 'opis_tutora' ); ?>
            </div>

          </div>
        </div>
      </div>

    <?php endwhile; ?>

    </div>
  </div>


<section>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
