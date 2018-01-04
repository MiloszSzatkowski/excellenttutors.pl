<!DOCTYPE html>
<html lang="pl">

  <head>
<?php require_once 'head.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>

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
          [class*="col-"] {
            width: 100%;
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

    <script>/*
    function setfilename(val)
    {
      var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
      document.getElementById("dodaj_plik").placeholder = fileName;
    }*/
    </script>

      <!-- sekcja po lewej -->


    <header class="Kontakt container" style="height:100vh; padding-top:200px; text-align:center;">
      <div class="row">
          <div class="col-md-3 col-sm-1">
          </div>
          <div class="col-md-6 col-sm-10">
            <p class="d-block center gold_border" style="padding:20px;">Twoja wiadomość została wysłana. Dziękujemy za kontakt.</p>
            <p class="d-block" style="text-align:right;"><i>-Excellent Tutors</i></p>
          </div>
          <div class="col-md-3 col-sm-10">
          </div>
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
