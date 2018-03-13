<?php
/*
	Template Name: Cennik
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
      <?php if (get_field( 'opis_strony' )) {  ?>
      <div class="col-md-12 pad-bottom">
        <p class="pad-bottom"
        style="width:100%;text-align:center; padding-top:1.3em;">
          <?php the_field( 'opis_strony' ); ?>
        </p>
      </div>
      <?php }  ?>
      <div class="text-box" style=" padding:1em;">
        <div class="">
          <h3 style="text-align:center;margin-bottom:2em;">
            <?php the_field( 'tabela_title' ); ?>
            <br>
          </h3>
        </div>
        <?php $table = get_field( 'tabela_z_cennikiem' );

if ( $table ) {
    echo '<div class="row">';

    foreach( $table['body'] as $row => $key ) {
      echo '<div class="col-md-12"><h5 class="center">' . $key[0]['c'] . '</h5></div>
      <div class="col-md-12"><h4 class="center dark-gold">' . $key[1]['c'] . '</h4></div>'
      . '<div class="col-md-12"><h5 class="center">' . $key[2]['c'] . '</h5></div>
      <div class="col-md-12"><h4 class="center dark-gold">' . $key[3]['c'] . '</h4></div>'
      ;
        if(isset($key[4]['c']) && isset($key[5]['c']) )
        {
          echo '<div class="col-md-12"><h5 class="center">' . $key[4]['c'] . '</h5></div>
          <div class="col-md-12"><h4 class="center dark-gold">' . $key[5]['c'] . '</h4></div>';
        }
      }

    echo '</div>';
} ?>
      </div>

      <div class="text-box col-md-12" style=" padding:2em; margin:2em 0 4em 0;">
        <?php the_field( 'uwagi' ); ?>
      </div>

    </div>
  </div>

<section>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
