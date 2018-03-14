<?php get_header(); ?>

  <section class="" style="height:5.2em;  border-top:2px solid lightgrey;
  border-bottom:2px solid lightgrey; background:rgba(0,0,0,0.051);
  margin-top:3.2px; ">

    <h2 style="width:100%; text-align:center; padding-top:0.7em;">
      <?php the_field( 'page_title' ); ?>
    </h2>

  </section>

  <section>
    <?php if ( get_field( 'baner_under_title') ) { ?>
      <div class="container-fluid">
        <div style="background-image:url(<?php the_field( 'baner_under_title' ); ?>);
          height:5em;" />
          <?php if ( get_field( 'baner_under_title') ) { ?>
          	<img src="<?php the_field( 'baner_under_title' ); ?>" />
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </section>

  <div class="container" style="padding-bottom:50px;">
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
