<!DOCTYPE html>
<html lang="pl">

  <head>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src=" * trolled you * "></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107543947-1');
    </script>

    <?php require_once 'head.php'; ?>

  </head>


  <body id="page-top">

  <style>

    @media all and (max-width : 1100px){
      .tekst_kont_glowna{height: auto !important;}
    }
    @media all and (max-width : 1000px){
#Menu_big,#galeria{display:none}#MainHead,#landing_page_row{padding:0!important;margin:0!important}
#galeria{visibility:hidden}.carousel-indicators{bottom:0!important}
#test_strona_glowna,.tekst_kont_glowna{margin:0 auto;margin-top:-1.6em!important;width:100%!important}
.mob_zdj,.mob_zdj img{width:100vw}#Menu_small,.mob_zdj{display:block!important}
    }

  </style>

    <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

    <!-- Include html - Nawigacja -->
    <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>

      <!-- sekcja po lewej -->
      <div class="mob_zdj" style="display:none;text-align:center;">
        <p><img src="images/Mierzymy-wysoko.jpg" alt="" style=""></img></p>
      </div>

    <header id="MainHead" class="MainHead">
      <div id="landing_page_row" class="row">

       <section id="galeria" class="col-lg-12 col-md-12">
         <?php
         $arr = [
           'images/Excellent-tutors.jpg', ' ', ' ',
           'Wybitni nauczyciele', 'images/Mierzymy-wysoko.jpg', 'Nasza-kadra.php',
           'Warci Twojego zaufania', 'images/Zaufali-nam.jpg', 'Zaufali-Nam.php',
           'Bogata oferta przedmiotów', 'images/bogata-oferta.jpg', '#tekst_strona_glowna',
           'Lekcje gratis!', 'https://i.imgur.com/4mamofa.jpg', 'Lekcje-gratis.php',
           'Zapisz się już dziś! ', 'images/Zapisz-sie-juz-dzis.jpg', 'Kontakt.php'
         ];
         ?>

           <div class="bd-example galeria">
             <div id="nawigacja_karuzeli" class="carousel slide" data-ride="carousel" data-interval="3800">
               <ol class="carousel-indicators" style="bottom: 90%;">
                 <?php
                 $var = 0;
                 while($var < count($arr)):
                 ?>
                 <?php if($var==0): ?>
                 <li  data-target="#nawigacja_karuzeli" data-slide-to="<?=$var?>" class="active"></li>
                 <?php  endif; ?>
                 <?php if($var>0): ?>
                 <li  data-target="#nawigacja_karuzeli" data-slide-to="<?=$var/3?>" class=""></li>
                 <?php  endif; ?>
                 <?php
                  $var=$var+3;
                  endwhile;
                  ?>
               </ol>
               <div class="carousel-inner galeria" role="listbox">

                 <?php
                 $var = 0;
                 while($var < count($arr)):
                 ?>
                 <?php if($var==0): ?>
                   <div class="carousel-item active">
                     <img id="" class="d-block img-fluid galeria_zdj" data-src="" alt=""
                     src="" data-holder-rendered="true" style="background-image:url(
                     <?=$arr[$var]?>
                     )">
                   </div>
                 <?php  endif; ?>

                  <?php if($var>0): ?>
                 <div class="carousel-item"><a href="<?=$arr[$var+2]?>" style="color:white; z-index:-1;">
                   <img id="" class="d-block img-fluid galeria_zdj" data-src="" alt=""
                   src="" data-holder-rendered="true" style="background-image:url(<?=$arr[$var+1]?>)">
                   <div id="tekst_caption" class="carousel-caption   d-md-block tekst_caption" style="">
                      <h5><?=$arr[$var]?></h5>
                     <p></p>
                   </div></a>
                 </div>
                 <?php  endif; ?>

                 <?php
                  $var=$var+3;
                  endwhile;
                  ?>

              </div>

              <a class="carousel-control-prev" data-target="#nawigacja_karuzeli" role="button" data-slide="prev"
              style="height:2em;background-color:rgba(0,0,0,0.4);top:35%;width:2em; margin:1em;
              border-radius:50%/50%;border:1px solid white; box-shadow: 0px 0px 5px black; z-index:10;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" data-target="#nawigacja_karuzeli" role="button" data-slide="next"
              style="height:2em;background-color:rgba(0,0,0,0.4);top:35%;width: 2em; margin:1em;
              border-radius:50%/50%;border:1px solid white; box-shadow: 0px 0px 5px black; z-index:10;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left:6px;"></span>
                <span class="sr-only">Next</span>
              </a>

           </div>

      </section>

        <!-- end of row -->
      </div>



    </div>

    <section id="tekst_strona_glowna" class="col-md-12 tekst_strona_glowna" style="padding-top:2em; padding-left:0; padding-right:0;">

      <div class="tekst_kont_glowna">

        <h4 style="color:#C06014;">Pierwszy raz na stronie?</h4>
        <hr>
        <h5 class="" style=""> Nazywamy się <strong style="color:#C06014;">Excellent Tutors</strong>
          i jesteśmy mobilną szkołą korepetycji. Nasz obszar działania to <strong style="color:#C06014;">Kraków</strong>.
          <br><p></p>Prowadzimy indywidualne korepetycje z dojazdem do domu ucznia z przedmiotów takich jak:</h5>
          <p></p>
          <p><ul id="przedmioty" style="list-style: none; background-color:rgba(0,0,0,0.06);padding:1em; display:block; text-align:center;">

            <style>
            #mat:before{background-image: url('images/icon-matematyka.png');}
            #fiz:before{background-image: url('images/icon-fizyka.png');}
            #chem:before{background-image: url('images/icon-chemia.png');}
            #biol:before{background-image: url('images/icon-biologia.png');}
            #jang:before{background-image: url('images/icon-j-angielski.png');}
              .icon-ul:before{
                 content: '';
                 display: inline-block;
                 height: 2em;
                 width: 2em;
                 background-size: contain;
                 background-repeat: no-repeat;
              }
              .icon-ul{
                display:inline-block;

                padding: 1em;
                font-size: 1.5em;
                border-left: 2px solid grey;
              }
              .icon-ul:hover{
                background-color: #C06014;
              }
              #jang{border-right: 2px solid grey;}
              @media all and (max-width : 500px){
                #przedmioty{
                  text-align: left !important;
                  width: 100%;
                }
                #przedmioty a li {
                  width: 100%;
                  font-size: 1.1em;
                }
                #jang{border-right: 0;}
                h5, p, li, a {
                  font-size: 1.1em;
                }
              }

            </style>

            <p></p>
            <a href="Przedmioty.php"><li id="mat" class="icon-ul">matematyka</li></a>
            <a href="Przedmioty.php"><li id="fiz" class="icon-ul">fizyka</li></a>
            <a href="Przedmioty.php"><li id="chem" class="icon-ul">chemia</li></a>
            <a href="Przedmioty.php"><li id="biol" class="icon-ul">biologia</li></a>

          </ul></p>
          <hr>
          </h6>
          <div class="row">

              <div class="col-md-12">
                <h6 style="" >Jeśli jesteś licealistą poszukującym przygotowania do matury,
                  studentem borykającym się z sesją,<br> czy wreszcie rodzicem potrzebującym
                dodatkowych zajęć dla swojego dziecka <strong style="color:#C06014;">- nie mogłeś lepiej trafić!</strong></h6>
                <h6 style="" >Nasza kadra zrzesza absolwentów najlepszych uczelni, którzy ukończyli swoje kierunki z najwyższymi wynikami.
                  <br>Każdy z nich posiada doświadczenie w pracy z młodzieżą, łatwość przekazywania wiedzy i umiejętność budowania partnerskiej relacji z uczniem.
                   <p></p>Nie brakuje wśród nas także osób z kierunkowym wykształceniem pedagogicznym oraz certyfikowanych egzaminatorów OKE. </h6>
              </div>

              <!-- <div class="col-md-12">
                <h4 style="color:#C06014;margin-top:1em;">Kolejny raz na stronie?</h4>
                <hr>
                <a href="Lekcje-gratis.php"><p>Zapraszamy po <span style="color:red;">darmowe lekcje</span> dla stałych klientów!</p></a>
              </div> -->
              <hr>

              <div class="col-md-12">
                <a  href="Kontakt.php">
                  <div class="hover-btn-a wow fadeInRight" style="background-color:#C06014; color:white; padding: 1em; text-align:center;">
                    <h1>ZAPISZ SIĘ JUŻ DZIŚ !</h1>
                  </div>
                </a>
              </div>

          </div>

      </div>

    </section>
    <hr><p></p>
    <section>
      <style>
        .hover-btn:hover{
          border: 2px solid red;
        }
      </style>

      <div class="row " style="height:auto; margin-bottom:-3.4em;">
        <div class="col-md-6" style="padding-right:0; margin-bottom:-3em;cursor:pointer;">
          <a href="javascript:;" onclick="changeState('img_zaufac','img_wizja', 'Misja_i_wizja_glowna', 'Czemu_warto_nam_zaufac_tekst');changeState('img_zaufac_p' , 'img_wizja_p');">
            <img id="img_wizja" class=" hover-btn" src="images/Nasza-misja-i-wizja.jpg" alt="" style="width:100%;"></a>
            <p id="img_wizja_p" style="width:100%;position:relative;top:-50%;text-align:center;text-decoration:none;font-size:200%;z-index:10;font-weight:900;
            letter-spacing:0.4em;"
            onclick="changeState('img_zaufac','img_wizja', 'Misja_i_wizja_glowna', 'Czemu_warto_nam_zaufac_tekst');changeState('img_zaufac_p' , 'img_wizja_p');">MISJA I WIZJA</p>
        </div>
        <div class="col-md-6" style="padding-left:0; margin-bottom:-3em;cursor:pointer;" >
          <a href="javascript:;"
          onclick="changeState('img_wizja','img_zaufac', 'Czemu_warto_nam_zaufac_tekst', 'Misja_i_wizja_glowna');changeState('img_wizja_p','img_zaufac_p');">

            <img id="img_zaufac" class=" hover-btn" src="images/Dlaczego-warto-nam-zaufac.jpg" alt="" style="width:100%;" ></a>
            <p id="img_zaufac_p" style="width:100%;position:relative;top:-50%;text-align:center;text-decoration:none;font-size:200%;z-index:10;"
            onclick="changeState('img_wizja','img_zaufac', 'Czemu_warto_nam_zaufac_tekst', 'Misja_i_wizja_glowna');changeState('img_wizja_p','img_zaufac_p');">
              DLACZEGO WARTO NAM ZAUFAĆ?</p>
        </div>
      </div>

    </section>
    <style>
    @media all and (max-width : 700px){
      #img_wizja_p, #img_zaufac_p{
        font-size: 1.5em !important;
      }
        #Misja_i_wizja_glowna{
          padding:1em;
          font-size: x-small;
          text-align: left;

        }
        .quote-card:before{
          content: " ";
        }
        .quote-card{
          padding:1em;
          padding-left:1em;
        }
        .quote-card p{
          text-align: left;
        }

        #Misja_i_wizja_zdj_kont{
          padding: 2em !important;
        }

        #Misja_i_wizja_zdj p{
          text-align: center;
          font-size: medium;
          left:4% !important;
          top:45% !important;
          background-color: rgba(0, 0, 0, 0.7);
        }
        .o_Nas{
          padding: 1em !important;
        }
        .section_tekst_O_Nas{
          text-align: left;
          font-size: small;
        }
      }
    </style>
    <p></p>
    <section id="Misja_i_wizja_glowna" class="col-md-12 tekst_strona_glowna" style="padding-top:2em; padding-left:0; padding-right:0;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.5); background-color:white; margin-top:3em;">
    <section class="row o_Nas">
      <section class="col-md-7 section_tekst_O_Nas" style="padding-top:0.2em; margin-bottom: 1.3em;">
        <h5>MISJA</h5>

        <blockquote class="quote-card" >
              <p style="font-size:15px;">
                Naszą misją jest całkowicie zindywidualizowana edukacja, dopasowana do osobistych potrzeb każdego ucznia.
            Kładziemy duży nacisk na dobrą organizację pracy, aby optymalnym nakładem energii osiągnąć
            maksymalne rezultaty w jak najkrótszym czasie. Pomagamy nie tylko pokonać stres,
            uwierzyć w siebie i poprawić swoje wyniki, ale także odkrywamy w naszych
            Podopiecznych ich ukryte talenty i zarażamy swoją pasją.
              </p>

              <cite style="font-size:10px;color:#C06014;">
                Excellent Tutors tm.
              </cite>
            </blockquote>

        <h5>WIZJA</h5>
        <p><ul>
          <li>Chcemy kształcić ambitnych Uczniów i pomagać im spełniać marzenia -
            począwszy od poprawy ocen w szkole po otwarcie drzwi na najlepsze uczelnie.</li>
            <li>Chcemy być liderem na rynku korepetycji w Krakowie oraz z biegiem czasu
            otwierać coraz więcej oddziałów w całej Polsce.</li>
            <li>Chcemy tworzyć przyjazne młodym osobom miejsce pracy, oferujące uczciwe i przejrzyste
            warunki zatrudnienia, dające możliwość dynamicznego rozwoju oraz poczucie misji i satysfakcji.</li>
            <li>Chcemy być prężnie działającą, rozrastającą się, nowoczesną marką.</li>
            <li>Chcemy wytyczać nowe standardy edukacji, opartej na partnerskim, pełnym życzliwości i wsparcia,
              indywidualnym podejściu do każdego Ucznia. </li>
        </ul></p>

      </section>

      <section id="Misja_i_wizja_zdj_kont" class="col-md-5" style="padding-left:1em;padding-right:1em;">
        <div id="Misja_i_wizja_zdj" >
        </div>
      </section>
     </section>
    </section>
    <style>
      @media all and (max-width : 700px){
        #Czemu_warto_nam_zaufac_tekst{
          left:3.5% !important;
        }
        #Czemu_warto_nam_zaufac_tekst section section{
          font-size: small !important;
          text-align: left;
        }
        #Czemu_warto_nam_zaufac_tekst section{
          padding:5px !important;
        }
      }
    </style>
      <section id="Czemu_warto_nam_zaufac_tekst" class="row o_Nas" style="display:none;margin:0;margin-top:3em;padding:0; width:100%; position:relative; left:1.25%;">
        <section class="col-lg-12 section_tekst_O_Nas row" style="padding:2em;">
          <section class="col-lg-6 col-md-12">
            <p></p>
            <h6>Szanowni Rodzice, drodzy Uczniowie.</h6>
            <p></br>
              &emsp;&emsp;Nazywam się Natalia Szatkowska i jestem założycielką oraz pomysłodawczynią Mobilnej Szkoły Korepetycji Excellent Tutors,
              która powstała w odpowiedzi na rosnące zapotrzebowanie ambitnych Uczniów oraz ich Rodziców na wysokiej jakości indywidualne lekcje
              z najbardziej potrzebnych i przyszłościowych dziedzin, takich jak matematyka, przedmioty ścisłe czy języki obce.
              Podobnie jak Państwo, zdaję sobie sprawę z tego, że zdobycie solidnego wykształcenia jest jednym z najważniejszych celów
              każdego młodego człowieka. Niestety, wiele czynników, począwszy od przepełnionych klas szkolnych, poprzez niedojrzałych klasowych
              kolegów, utrudniających nauczycielom prowadzenie lekcji, na samych nauczycielach i ich kompetencjach skończywszy, często nie
              składa się na to, by ułatwiać Uczniowi ten ważny proces. W trzydziestoosobowej klasie nawet najlepszy nauczyciel nie jest w stanie
              poświęcić indywidualnej uwagi każdemu – stąd rodzą się braki i zaległości, które powinny być jak najwcześniej diagnozowane oraz
              nadrabiane. W przeciwnym wypadku zaczynają się piętrzyć i przerastać ucznia, a stres związany z przedmiotem nie sprzyja
              poszerzaniu wiedzy.
            </br>&emsp;&emsp;Nauczanie innych jest moją pasją - od pięciu lat pracuję jako prywatna nauczycielka matematyki i fizyki.
              Obecnie przygotowuję już czwarty rocznik maturzystów do rozszerzonych egzaminów z tych przedmiotów na zajęciach indywidualnych
              oraz autorskich kursach grupowych, które cieszą się sporą popularnością.</br>&emsp;&emsp;
              Jestem absolwentką fizyki Uniwersytetu Śląskiego w Katowicach, kontynuującą studia wyższe na Uniwersytecie Jagiellońskim,
              na kierunku Astrofizyka i Kosmologia. Doskonale wiem, jak wielką wartością jest edukacja i ile wysiłku trzeba włożyć w osiągnięcie
              upragnionych rezultatów. Sekretem mojej skuteczności w nauczaniu innych jest partnerskie podejście do ucznia, oparte
              na pełnym zrozumieniu nie tylko jego potrzeb, ale również obaw, lęków i frustracji, które mnie samej są nieobce.
            </br>&emsp;&emsp;Mimo że nie wiążę swojej przyszłości z pracą w szkole,
              w trosce o ciągłe podnoszenie jakości prowadzonych przeze mnie kursów i korepetycji, poza standardowym programem swoich studiów
              realizuję sekcję pedagogiczną. Stale dokształcam się, czytając specjalistyczną literaturę i uczestnicząc regularnie w warsztatach
              i szkoleniach dotyczących metod szybkiej nauki, motywacji oraz pracy z uczniem.
              Ponieważ brak mi czasu aby osobiście pomóc każdemu,
              kto się do mnie zgłasza, swoim nowatorskim podejściem do edukacji chcę
              dzielić się z innymi korepetytorami, pragnącymi stale rozwijać się i doskonalić nauczycielski warsztat.

              Osobiście prowadzę wnikliwe rozmowy kwalifikacyjne i szczegółowo analizuję każde CV. Powierzając w ich ręce edukację młodego
              pokolenia, mam świadomość odpowiedzialności, jaka na mnie spoczywa.</br>&emsp;&emsp;
              Zaufało mi już wielu Uczniów i Rodziców. Mam nadzieję,
              że zaufacie mi również Wy.
            </br></br>
              Pozdrawiam serdecznie</br>
              <i>Natalia Szatkowska</i>
             </p>

          </section>
          <section class="col-lg-6 col-md-12">
            <section id="Czemu_warto_nam_zaufac_tekst_zdj_kont" class="col-sm-12" style="">
              <div id="Czemu_warto_nam_zaufac_tekst_zdj">
              </div>
            </section>
          </section>
        </section>
      </section>
      <p></p>
      <style>
      .ceny{
          text-align:center;
          padding:1em;
          padding-bottom:0;
      }
      </style>
      <div class="row">
        <div class="col-md-12" style="background-color:#C06014; color:white; text-align:center;">
          <p><h3>CENNIK</h3></p>
        </div>

        <div class="col-md-6" style="padding:1em;">
          <div class="" style="background-color:lightgrey;">
            <p style=""><h3 class="ceny">Współpraca doraźna</h3></p>
            <hr>
            <div class="row">
              <div class="col-md-6" style="border-right:1px solid grey;">
                <p class="ceny">Korepetycje szkolne oraz Korepetycje maturalne</p>
              </div>
              <div class="col-md-6">
                <h4 class="ceny" style="color:#C06014;">60 zł / 60 minut</h4>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-md-6" style="border-right:1px solid grey;">
                <p class="ceny">Korepetycje akademickie</p>
              </div>
              <div class="col-md-6">
                <p class="ceny">Wycena indywidualna</p>
              </div>
            </div>
            <hr>
          </div>
        </div>

        <div class="col-md-6" style="padding:1em;">
          <div class="" style="background-color:lightgrey;">
            <p style=""><h3 class="ceny">Współpraca stała</h3></p>
            <hr>
            <div class="row">
              <div class="col-md-6" style="border-right:1px solid grey;">
                <p class="ceny">Korepetycje szkolne oraz Korepetycje maturalne</p>
              </div>
              <div class="col-md-6">
                <h4 class="ceny" style="color:#C06014;">50 zł / 60 minut</h4>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-md-6" style="border-right:1px solid grey;">
                <p class="ceny">Korepetycje akademickie</p>
              </div>
              <div class="col-md-6">
                <p class="ceny">Wycena indywidualna</p>
              </div>
            </div>
            <hr>
          </div>
        </div>

      </div>
      <p></p>

      <style>
      .hover-btn-a:hover{
        border: 3px solid red;
      }
      </style>

      <a  href="Kontakt.php">
        <div class="hover-btn-a wow fadeInLeft" style="background-color:#C06014; color:white; padding: 1em; text-align:center;">
          <h1>ZAPISZ SIĘ JUŻ DZIŚ !</h1>
        </div>
      </a>

      <style>
        .uwagi{
          font-size: 0.7em;
          padding: 2em;
        }
      </style>
      <hr>
      <div class="uwagi">
        <h6>Uwagi:</h6>
        <p>
          <ul>
            &nbsp;
            <li>W cenę zajęć wliczony jest dojazd korepetytora oraz wybrane materiały dydaktyczne.
            </li>

            <li>W przypadku utrudnionego dojazdu, cena zajęć może być wyższa.
            </li>

            <li>Płatności za zajęcia dokonuje się po zajęciach, przelewem na konto szkoły.
            </li>

            <li>Przez współpracę stałą rozumie się współpracę opartą na umowie między Uczniem i Szkołą, obejmującą okres przynajmniej czterech tygodni.

            <li>Wskazana cena jest ceną gwarantowaną od początku nauki do końca roku szkolnego.
            </li>

            <li>Wystawiamy rachunki i na życzenie Klienta przesyłamy je drogą elektroniczną.
            </li>

            <li>Podane ceny są wyłącznie informacją handlową i nie stanowią oferty w myśl art. 66, §1. Kodeksu Cywilnego
            </li>
        </p>
      </div>
      <hr>

      <!-- Footer -->
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

    <script type="text/javascript">
    changeState('img_zaufac','img_wizja');
    changeState('img_zaufac_p','img_wizja_p');
    </script>

    <script>new WOW().init();</script>

  </body>

</html>
