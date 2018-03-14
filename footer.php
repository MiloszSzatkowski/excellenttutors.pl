<div class="clear"></div>

<footer id="footer" role="contentinfo">

<?php wp_footer(); ?>
<div class="container-fluid footcontainer">
  <div class="container " style="">
    <div class="row">

      <div class="col-md-12" style="width:100%;">
        <p class="text-center">
          <img src="<?php echo get_option('url_baner'); ?>" style=""
          alt="  Mobilna Szkoła Korepetycji Excellent Tutors - Kraków ">
        </p>
        <p></p>
      </div>

      <div class="col-md-12">

          <p><?php echo get_option('meta_google'); ?></p>

        <h5 style="margin: 1em;">
          <a style="" href="tel:<?php echo get_option('mytel'); ?>" class="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <?php echo get_option('mytel'); ?>
          </h5>

          <h5>
            <a style="" href="mailto:<?php echo get_option('meta_mail'); ?>">
              <?php echo get_option('meta_mail'); ?>
          </a>
        </h5>

      </div>

        <div class="col-md-6" >
          <h3 class="">Dane Firmy</h3>
        <hr>
        <p>
          <p><?php echo get_option('nazwa_firmy'); ?></p>
          <p>NIP: <br> <?php echo get_option('nip'); ?></p>
          <p>REGON: <br> <?php echo get_option('regon'); ?></p>
          <p>ADRES SIEDZIBY: <br> <?php echo get_option('adres'); ?></p>

        </p>
        </div>

        <div class="col-md-6">
          <h3>Mapa Strony</h3>
          <hr>
          <div style="text-align: center; padding-top:1em;">
              <div style="display: inline-block; text-align: left;">
                <?php wp_nav_menu(
                array( 'theme_location' => 'main-menu' ),
                array('menu_class' => 'foot-menu')          ); ?>
              </div>
          </div>

          </p>
        </div>

        <div class="col-md-12 text-center" style="border-top: 2px solid lightgrey;">
          Ⓡ <?php echo get_option('nazwa_firmy'); ?> - 2018. Wszelkie Prawa Zastrzeżone.
        </div>


      </div>
    </div>

</div>


<style media="screen">
.footcontainer{
  border-top: 2px solid lightgrey;
  background-color:white;
  padding-bottom: 10px;
}
.footcontainer img{
  max-width: 300px;
  margin: 0 auto;
  padding: 10px;
}
.footcontainer hr{
  width: 50%;
  margin: 0 auto;
}
.footcontainer p, .footcontainer h3, .footcontainer h5{
  text-align:  center;
}
.footcontainer .menu-menu-1-container ul li a{
  letter-spacing: 3px;
  text-align: center;
}
.footcontainer .menu-menu-1-container ul ul li a{
  letter-spacing: 0px;
  padding: 1em;
}
.footcontainer .fa-phone {
  font-size: 1em !important;
}
</style>

</body>

</html>
