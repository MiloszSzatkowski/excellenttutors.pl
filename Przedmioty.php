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

         #Menu_big{
           display: none;
         }

         #Menu_small{

           display: block !important;

         }

         header{
           margin-top: 1.5em!important;
         }
    }

  </style>

  <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

  <!-- Include html - Nawigacja -->
  <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>

      <!-- sekcja po lewej -->
    <header class="container" style="margin-top:4em;">
      <div class="row">

        <section class="podstrona_tekst_przedmiot col-lg-12 col-md-12">

          <div id="przedmioty" class="row" style="">

            <style>
              .justify{
                text-align: justify;text-justify: inter-word;
              }
              .read p, .read h4{
                color:rgba(0,0,0,0.9);
              }
            </style>

            <div class="col-md-12 text-center">
              <h3>PRZEDMIOTY</h3>
              <div src="" alt="" style="background-image:url('images/przedmioty.jpg');height:18em;width:100%;background-repeat:no-repeat;background-position:center;"></div>
              <hr>
            </div>

            <div class="col-sm-6 justify read" style=" ">
                <h4 class="text-center "><img src="images/icon-matematyka.png" alt="" width="20em"> Matematyka</h4>
                <hr>
                <?php
                 require_once 'teksty/przedmioty/matematyka.txt';
                 ?>
              </div>

            <div class="col-sm-6 justify read" style=" ">
              <h4 class="text-center"><img src="images/icon-chemia.png" alt="" width="20em"> Chemia</h4>
              <hr>

              <?php require_once 'teksty/przedmioty/chemia.txt'; ?>

            </div>

            <div class="col-sm-6 justify read" style=" ">
              <h4 class="text-center"><img src="images/icon-biologia.png" alt="" width="20em"> Biologia</h4>
              <hr>

              <?php require_once 'teksty/przedmioty/biologia.txt'; ?>

            </div>
            <div class="col-sm-6 justify read" style=" ">
              <h4 class="text-center"><img src="images/icon-fizyka.png" alt="" width="20em"> Fizyka</h4>
              <hr>

              <?php require_once 'teksty/przedmioty/fizyka.txt'; ?>

          </div>

                      </div>
          <style>
            .hover-btn-a:hover{
              border: 5px solid red;
            }
          </style>
          <div class="col-md-12">
            <a  href="Kontakt.php">
              <div class="hover-btn-a wow fadeIn" style="background-color:#C06014; color:white; padding: 1em; text-align:center;" data-wow-duration="8s">
                <h3>ZAPISZ SIĘ JUŻ DZIŚ !</h3>
              </div>
            </a>
          </div>

      </section>

      <p style="margin-bottom:2em;"></p>

      <!-- <section>
        <div class="row" style="background-color:white; box-shadow: 3px 3px 3px rgba(0,0,0,0.5); margin: 0 auto; padding:1.5em;margin-top:1em;">

        <h5 class="col-md-12 text-center">NASI TUTORZY:<hr ></h5>

         <?php //require_once 'Tutorzy.php'; ?>

        </div>

      </section> -->

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
