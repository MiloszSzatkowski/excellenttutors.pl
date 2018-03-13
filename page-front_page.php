<?php
/*
	Template Name: Strona_główna
*/
?>

<?php get_header(); ?>
<section id="content" role="main">

                <?php  $pageid = get_the_id();
                $content_post = get_post($pageid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content; ?>

</section>

<section id="tresc_po_banerze">
  <?php echo apply_filters('the_content',the_field( 'pod_banerem' )); ?>
</section>

<section>
  <div class="container" style="margin-bottom:2em;">
    <div class="row">
      <?php $images = acf_photo_gallery('galeria', $post->ID);
      // if( count($images) ):
          foreach($images as $image):
             $title = $image['title'];
             $url = preg_split('/[\ \n\,]+/',$image['large_srcset'])[0];
      ?>

      <div class="col-md-4" >
        <div class="" style="border: 3px solid rgba(0,0,0,0.1); border-radius: 5px;">
          <div class="" style="height:12em; background-image:url(<?=$url?>); background-size:cover;">
            <!-- obraz -->
          </div>
          <h4 class="text-center" style="padding:0.8em;">
            <?=$title?>
          </h4>
        </div>
      </div>

    <?php endforeach; ?>
    <?php //endif; ?>
    </div>
  </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
