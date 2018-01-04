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

          .containter_kontakt{
            padding: 1em !important;
            padding-right: 1.5em !important;
            margin: 1em !important;
            font-size: smaller !important;
          }

          .dane_firmy{
            padding: 1.5em !important;
            padding-right: 2em !important;
            margin: 1em !important;
            margin-top: 0 !important;
            padding-top: 0 !important;
            font-size: smaller !important;
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
    <div class="row">
      <div class="col-md-6">

    <header class="Kontakt container">
      <div class="row">

        <section class="col-md-12 containter_kontakt">

        <!--  <div w3-include-html="Forma_kontaktowa.php"></div> -->

        <div class="">

                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h5 class=" head_formularz">
                            Formularz kontaktowy <small> </br> <i>Zapraszamy do kontaktu</i> </small></h5>
                    </div>

            </div>
        </div>

        <div class="col-md-12">
          <div class="containter opis_kontakt">
            <p class="lead"></p>
            <p id="sposob_zapisu">
              Zapisy na zajęcia prosimy
              kierować przez formularz kontaktowy lub bezpośrednio na
              adres: <a href="mailto:biuro@excellenttutors.pl">biuro@excellenttutors.pl</a>.
            </p>

            <p id="sposob_zapisu">Czas oczekiwania na odpowiedź zwrotną to z reguły parę godzin.</p>

            <p id="sposob_zapisu">W sytuacjach naglących prosimy o kontakt telefoniczny z Biurem lub sms
              w przypadku braku odpowiedzi. Postaramy się odpowiedzieć jak najszybciej.</p>

          </div>
        </div>

        &nbsp;

        <form id="contact-form" class="container formularz" method="post" action="send.php" role="form" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form id="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">

                                        Imię i nazwisko</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="imię i nazwisko" required="required" />


                                </div>
                                <div class="form-group">
                                    <label for="email_id" class="control-label">
                                        Adres mailowy</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>

                                        <input type="email" class="form-control" name="email" id="email" placeholder="email@" required="required" /></div>

                                </div>
                                <div class="form-group">
                                  <label for="tel">
                                      Numer telefonu</label>
                                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="numer telefonu" required="required" />

                                </div>

                            </div>

                            <div class="col-md-6">

                              <div class="form-group">
                                  <label for="subject">
                                      Przedmiot</label>

                                  <select id="subject" name="przedmiot" class="form-control" required="required">

                                      <option value="Matematyka">Matematyka</option>
                                      <option value="Fizyka">Fizyka</option>
                                      <option value="Chemia">Chemia</option>
                                      <option value="Biologia">Biologia</option>

                                  </select>
                                  <!-- <i class="small">Możesz zaznaczyć parę przedmiotów trzymając klawisz 'CTRL'.</i> -->
                              </div>

                              <div class="form-group">
                                  <label for="subject">
                                      Zakres korepetycji</label>

                                  <select id="subject" name="rodzaj" class="form-control" required="required">

                                      <option value="Szkoła podstawowa 1-3">Szkoła podstawowa, klasy: 1-3</option>
                                      <option value="Szkoła podstawowa, klasy: 4-6">Szkoła podstawowa, klasy: 4-6</option>
                                      <option value="Szkoła podstawowa, klasy: 6+">Szkoła podstawowa, klasy: 6+</option>
                                      <option value="Gimnazjum">Gimnazjum</option>
                                      <option value="Liceum - podstawa">Liceum - podstawa</option>
                                      <option value="Liceum - rozszerzenie">Liceum - rozszerzenie</option>
                                      <option value="Technikum">Technikum</option>
                                      <option value="Matura podstawowa">Matura podstawowa</option>
                                      <option value="Matura rozszerzona">Matura rozszerzona</option>
                                      <option value="Korepetycje akademickie">Korepetycje akademickie</option>

                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="how">
                                      Skąd się o nas dowiedziałeś?</label>
                                      <select id="" name="how" class="form-control" required="required">
                                          <option value="Google">Google</option>
                                          <option value="Facebook">Facebook</option>
                                          <option value="E-korepetycje">E-korepetycje</option>
                                          <option value="Korepetycje24">Korepetycje24</option>
                                          <option value="Korepetycje.edu.pl">Korepetycje.edu.pl</option>
                                          <option value="Gumtree">Gumtree</option>
                                          <option value="Olx">Olx</option>
                                          <option value="Polecenie innej osoby">Polecenie innej osoby</option>
                                          <option value="Inne">Inne</option>
                                      </select>
                              </div>

                          </div>

                          &nbsp;

                          <div class="col-md-12">
                            <label for="tel">
                                Adres korepetycji</label>
                              <input type="text" class="form-control" name="adres_korepetycji" id="tel" placeholder="Adres korepetycji" required="required" />

                          </div>

                          &nbsp;

                            <div id="miejsce_na_tekst" class="form-group col-md-12">
                                <label for="name">
                                    Wiadomość</label>
                                <textarea name="message" id="adres_korepetycji" class="form-control" rows="3" cols="8" required="required" placeholder="Wiadomość">

                                </textarea>
                            </div>



                        </div>
                        <!-- recaptcha -->


                        </div>

                        <div id="" class="g-recaptcha" data-sitekey=" * trolled you * " data-callback="enableBtn" data-expired-callback="disableBtn"></div>

                        <div id="clue" class="">
                          &nbsp;
                          <a href="#recaptcha" style="font-size:smaller;"><p style="color:red!important;">
                            <i>Prosimy o zaznaczenie pola "Nie jestem robotem"</i></p></a>
                        </div>
                        <p></p>

                        <div class="checkbox">
                          <label style="font-size:0.7em;" onclick="listenCheck();"><input id="checkMybox" type="checkbox" value=""><span> </span>
                            Wyrażam zgodę na przetwarzanie moich danych osobowych...
                            </label>
                            <span  onclick="showText();" style="cursor:pointer; font-size:0.7em; color: red;">czytaj więcej ▼</span>
                            <p id="showText" style="display:none; font-size:0.7em;">zgodnie z ustawą o ochronie danych osobowych w związku z
                          realizacją zgłoszenia. Podanie danych jest dobrowolne, ale niezbędne do przetworzenia zapytania.
                          Zostałem/am poinformowany/a, że przysługuje mi prawo dostępu do swoich danych, możliwości ich poprawiania,
                          żądania zaprzestania ich przetwarzania. Administratorem danych osobowych jest
                          <i>Mobilna Szkoła Korepetycji Excellent Tutors Natalia Szatkowska</i>
                          z siedzibą na ul. Praskiej 56/16 w Krakowie.
                          &nbsp;
                          <span style="cursor:pointer; font-size:1em; color: red;" onclick="hideText();"> Zwiń ▲</span></p>
                        </div>
                        <div id="clue2" class="">

                          <a href="#recaptcha" style="font-size:smaller;"><p style="color:red!important;">
                            <i>Prosimy o zgodę na przetworzenie danych</i></p></a>
                        </div>
                        <p></p>


                        <div class="col-md-2">
                            <button id="button1" type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Wyślij</button>
                        </div>


                      </form>

                    </div>
                </div>

            </div>
        </form>


        </section>

</div>


        <div  class="col-md-5 dane_firmy">

          &nbsp;

          <h5><i></i>Natalia Szatkowska</h5><p>dyrektor </br> <a href='tel:510-900-693'>510 900 693 </a></br>
            <a href='mailto:natalia.szatkowska@excellenttutors.pl'> natalia.szatkowska@excellenttutors.pl</a></p>
          <p></p>
          &nbsp;
          <!-- <h5>Miłosz Szatkowski</h5><p>zastępca dyrektora</br> <a href='tel:511-349-113'>511 349 113 </a></br>
            <a href='mailto:milosz.szatkowski@excellenttutors.pl'>milosz.szatkowski@excellenttutors.pl </a></p>
          <p></p>
          &nbsp; -->

          <p><a href="Cennik.php">► Zobacz na cennik i sposoby płatności.</a></p>

          <div class="py-5" vocab="http://schema.org/" typeof="Person" style="color:black; font-size:smaller; margin:0; padding:0;">
            <i>
              <p class=""><span property="name">Excellent Tutors</span> to mobilna szkoła korepetycji działająca na terenie
                <span property="addressLocality">Krakowa</span>.</p>
              <p class=""> NIP: 5512425550 | REGON: 366218095</p>
              <p class=""> Adres siedziby firmy: Ul Praska 56/16 30-322 Kraków.</p>
            </div>
          </i>

        </div>


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

    <script type="text/javascript">

    document.getElementById("button1").disabled = true;
    document.getElementById('checkMybox').checked = false;

    var checked = false;
    var good_captcha = false;

    function listenCheck (){
      if (document.getElementById('checkMybox').checked) {
        document.getElementById("clue2").style.display = "none";
      } else if (!document.getElementById('checkMybox').checked){
        document.getElementById("clue2").style.display = "block";
        document.getElementById("button1").disabled = true;
      }
      if (document.getElementById('checkMybox').checked && good_captcha == true) {
        document.getElementById("button1").disabled = false;
      }
    }

    function enableBtn(){
        good_captcha = true;
        document.getElementById("clue").style.display = "none";

        if (document.getElementById('checkMybox').checked && good_captcha == true){
        document.getElementById("button1").disabled = false;
          }
       }

    function disableBtn() {
      good_captcha = false;
      document.getElementById("button1").disabled = true;
      document.getElementById("clue").style.display = "block";
      }

      function showText() {
          document.getElementById('showText').style.display = 'block';
      }

      function hideText() {
        document.getElementById('showText').style.display ='none';
      }

    </script>
  </body>

</html>
