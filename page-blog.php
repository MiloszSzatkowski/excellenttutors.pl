<?php
/*
	Template Name: blog
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

    </div>
  </div>

  <div class="container">
    <?php
    $args1X = array( 'post_type' => 'blog', 'posts_per_page' => 20 );
    $loop1X = new WP_Query( $args1X );

    while ( $loop1X->have_posts() ) : $loop1X->the_post();?>
    <div class="" style="margin-bottom:5em;">
      <h2 class="text-center"><?php the_field( 'page_title' ); ?></h2>
      <hr>
      <?php  $pageid = get_the_id();
      $content_post = get_post($pageid);
      $content = $content_post->post_content;
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      echo $content; ?>
      <hr>
    </div>
    <?php endwhile; ?>
  </div>

<section>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
