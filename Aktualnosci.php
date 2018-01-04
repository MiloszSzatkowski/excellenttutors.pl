<!DOCTYPE html>
<html lang="pl">

  <head>
<?php require_once 'head.php'; ?>

  </head>


  <body id="page-top">

  <style>

    @media all and (max-width : 1100px){
      .super_hide{
        display: none;
      }

      #super_hide2{
        display: none;
        visibility: hidden;
      }

      .tekst_kont_glowna{
        height: auto !important;
      }
    }


    @media all and (max-width : 1000px){
          .regulamin{
            font-size: 0.8em;
            text-align: left;
            hyphens: none;
          }
          .regulamin h3{
            font-size: 1.8em;
          }
          .regulamin ol{
            padding-left: 1em;
          }
         #containters_landing_page{

          display: none !important;
          visibility: hidden !important;
         }
         #MainHead{

          padding: 0px !important;
          margin: 0px !important;
         }
         #landing_page_row{
           width: 100vw;
           padding: 0px !important;
           margin:0px !important;
         }
         #galeria{

           width: 100% !important;
           height: 100vh !important;
           padding: 0px !important;
           margin: 0px !important;
           margin-top: 0px !important;
           margin-bottom: 0px !important;
         }

         #tekst_caption{
          height: auto;
          bottom: 40%;
          padding: 10%;
          text-align: center;
          }
         #tekst_caption h5 {
           height: auto;
           text-align: center;
           font-size: 23px !important;
         }

         .carousel-indicators{
           bottom:0% !important;
         }

         #Menu_big{
           display: none;
         }

         #Menu_small{

           display: block !important;

         }
    }

  </style>

  <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

  <!-- Include html - Nawigacja -->
  <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>

      <!-- sekcja po lewej -->
    <header class="MainHead">

      <section class="podstrona_tekst_przedmiot regulamin">
        <div class="row">

          <a href="Lekcje-gratis.php" class="col-md-6 wow fadeInUp">
            <div>
              <div class="" style="width:100%; background-color:rgba(0,0,0,0.05); padding:1.5em;border:2px solid red;">
                <p style="width:100%;font-size:2em;text-align:center;">
                  Oferta "Przekaż Dalej!"
                </p>
                <p style="width:100%;font-size:1em;text-align:center;">
                  <i>Jak zdobyć lekcje gratis?</i>
                </p>
              </div>
          </div></a>

          <!-- <a href="#" class="col-md-6" style="opacity:0.2;">
            <div>
              <div class="" style="width:100%; background-color:rgba(0,0,0,0.05); padding:1.5em;border:2px solid red;">
                <p style="width:100%;font-size:2em;text-align:center;">
                  Konkurs!
                </p>
                <p style="width:100%;font-size:1em;text-align:center;">
                  <i>sekcja w budowie</i>
                </p>
              </div>
          </div></a> -->

          <div class="col-md-4">

          </div>

     </section>

    </div>
    </header>

    <header>
      <?php require_once 'Footer.html'; ?>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js">
    </script><script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- skrypty nawigacji galerii -->
    </script><script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <?php

    foreach (glob("js/*.js") as $js) {
      echo "<script src='$js'></script>\n";
    }

     ?>
<script>new WOW().init();</script>

  </body>

</html>
