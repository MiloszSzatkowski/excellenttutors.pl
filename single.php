<?php get_header(); ?>

  <?php if ( get_field( 'page_title' ) && get_field( 'baner_under_title')==false): ?>
    <section class="" style="height:5.2em;  border-top:2px solid lightgrey;
    border-bottom:2px solid lightgrey; background:rgba(0,0,0,0.051);
    margin-top:3.2px; ">

      <h2 style="width:100%; text-align:center; padding-top:0.7em;">
        <?php the_field( 'page_title' ); ?>
      </h2>

    </section>
  <?php endif; ?>

  <section style="overflow: hidden;" class="row">
    <?php if ( get_field( 'baner_under_title') ) { ?>

      <div class="container-fluid col-md-12" style="background-image:url(<?php the_field( 'baner_under_title' ); ?>);
        height:22em; background-position:center; background-size:100%;
        box-shadow:inset 0 0 0 2000px rgba(10,10,0,0.3);"

        />
        <h1 class="" style="width:100%; text-align:center; font-size:5em;
        line-height: 4em; filter: brightness(100%); color:white;">
        <?php the_field( 'page_title' ); ?> </h1>
      </div>


    <?php } ?>
  </section>

  <div class="container-fluid" style="padding-bottom:50px; clear: both;">
    <div class="row">
      <?php if (get_field( 'opis_strony' )) {  ?>
      <div class="col-md-12 pad-bottom">
        <p class="pad-bottom"
        style="width:100%;text-align:center; padding-top:1.3em;">
          <?php the_field( 'opis_strony' ); ?>
        </p>
      </div>
      <?php }  ?>
    </div>

    <div class="col-md-12">
      <?php  $pageid = get_the_id();
      $content_post = get_post($pageid);
      $content = $content_post->post_content;
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      echo $content; ?>
    </div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
