
<?php

require_once "recaptchalib.php";
require_once "PHPMailer.php";
require_once "Exception.php";
require_once "SMTP.php";
require_once "POP3.php";
require_once "OAuth.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

date_default_timezone_set('Etc/UTC');

// your secret key
$secret = " * ";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
//
$how = $_POST['how'];
//
$name = $_POST['name'];
//
$email = $_POST['email'];
//
$phone = $_POST['tel'];
//
$adres_korepetycji = $_POST['adres_korepetycji'];
// przedmiot
$przedmiot = $_POST['przedmiot'];
// Rodzaj kursu
$rodzaj = $_POST['rodzaj'];
// W sprawie
$sprawa = $_POST['sprawa'];
// WIADOMOŚĆ
$message = $_POST['message'];

$Body = "<table style='width:100%;'>" .
  "<tr>" .
  "<th style='padding:1em;border: 1px solid black;'>Imię i Nazwisko</th>" .
 	"<td style='padding:1em;border: 1px solid black;'>" . $name . "</td>" .
  "</tr>" .
   "<tr>" .
    "<th style='padding:1em;border: 1px solid black'>E-mail</th>" .
 	"<td style='padding:1em;border: 1px solid black;'>" . $email . "</td>" .
  "</tr>" .
  "<tr>" .
  "<th style='padding:1em;border: 1px solid black'>Numer telefonu</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $phone . "</td>" .
  "</tr>" .
  "<tr>" .
  "<th style='padding:1em;border: 1px solid black'>Przedmiot</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $przedmiot . "</td>" .
  "</tr>" .
  "<tr>" .
    "<th style='padding:1em;border: 1px solid black'>Rodzaj Korepetycji</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $rodzaj . "</td>" .
  "</tr>" .
  "<tr>" .
    "<th style='padding:1em;border: 1px solid black'>Adres Korepetycji</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $adres_korepetycji . "</td>" .
  "</tr>" .
  "<tr>" .
    "<th style='padding:1em;border: 1px solid black'>Wiadomość</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $message . "</td>" .
  "</tr>" .
  "<tr>" .
    "<th style='padding:1em;border: 1px solid black'>Skąd się o nas dowiedzieli</th>" .
    "<td style='padding:1em;border: 1px solid black'>" . $how . "</td>" .
  "</tr>" .
"</table>" ;


$mail = new PHPMailer;

//$mail->SMTPDebug = 2;
//$mail->setLanguage('pl', 'phpmailer.lang-pl.php');

$mail->CharSet = 'UTF-8';

$mail->isSMTP();

$mail->Host = "*"; // set the SMTP server

// opcjonalnie
// SMTP
$mail->Port       = *;                    // set the SMTP port
$mail->SMTPAuth = true;
$mail->Username = "*";
$mail->Password = "*";

$mail->SMTPSecure = 'tls';

$mail->From = "*@excellenttutors.pl";
$mail->FromName = "Wiadomość ze strony";

$mail->addAddress("*@excellenttutors.pl", "Wiadomość ze strony");
$mail->addAddress("*@excellenttutors.pl", "Wiadomość ze strony");
$mail->AddReplyTo($email, $name);

$mail->isHTML(true);

$mail->Subject = $name;
$mail->Body = $Body;

$mail->Encoding = "base64";

//

$Body2 = '
    <div style="font-size: 0.9em;
            font-family: serif;">
    Dziękujemy za kontakt. Państwa wiadomość została wysłana do biura.
    <br> Skontaktujemy się niebawem.
    <br> Prosimy nie odowiadać na tego maila - został on wygenerowany automatycznie.
    </div>
    <hr style="height: 2px;
                     background-color: grey;">
    <div style="font-size: 0.9em;
                font-family: serif;">
      <p>
    <a href="http://excellenttutors.pl/Strona-Glowna"><img src="https://i.imgur.com/P51Akok.png"
    alt="Mobilna Szkoła Korepetycji Excellent Tutors" style="width:23em;margin-bottom:1em;"></a>
    <br>Natalia Szatkowska tel. <span style="font-weight:500;">510 900 693 </span> <span style="font-size:0.8em;"></span>
    <br>Miłosz Szatkowski tel. <span style="font-weight:500;">511 349 113 </span> <span style="font-size:0.8em;"></span>
      <br>E-mail: <a href="mailto:biuro@excellenttutors.pl">biuro@excellenttutors.pl</a>
      <br>NIP: 5512425550
      <br>REGON: 366218095
      <br><a href="http://excellenttutors.pl/Strona-Glowna">ExcellentTutors.pl</a></p>
    </div>';

    $mail2 = new PHPMailer;

    $mail2->CharSet = 'UTF-8';

    $mail2->isSMTP();

    $mail2->Host = "poczta.superhost.pl"; // set the SMTP server

    // opcjonalnie
    // SMTP
    $mail2->Port       = 25;                    // set the SMTP port
    $mail2->SMTPAuth = true;
    $mail2->Username = "*";
    $mail2->Password = "*";

    $mail2->SMTPSecure = 'tls';

    $mail2->From = "*";
    $mail2->FromName = "*";
    //$email
    $mail2->addAddress("*@excellenttutors.pl", $name);

    $mail2->AddReplyTo('*@excellenttutors.pl', 'Biuro Excellent Tutors');

    $mail2->isHTML(true);

    $mail2->Subject = 'Potwierdzenie wysłania wiadomości';
    $mail2->Body = $Body2;

    $mail2->Encoding = "base64";

    //


function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}


  if ($response != null && $response->success){
      if(!$mail->send())
      {
          //echo "błąd wysyłania maila - skrypt";
          //$echoIttoMe = "Error: " . $mail->ErrorInfo;
          //echo $echoIttoMe;
          //echo $Body;
          //phpinfo();
          //echo $echoIttoMe;
          //exit();
          Redirect('http://excellenttutors.pl/Error', false);
      }
      else
      {
        $mail2->send();
        //echo "mail został wysłany";
        //echo $Body;
        //phpinfo();
        ///echo $Body;
        //exit();
        Redirect('http://excellenttutors.pl/Sukces', false);
        //echo '<script type="text/javascript">alert("Dziękujemy, wiadomość została wysłana!")</script>';
      }
    }
    else {

      //echo "mail nie przeszedł weryfikacji";
      //echo $Body;
      //phpinfo();
      //echo "Wiadomość nie przeszła procesu weryfikacji. Spróbuj Ponownie.";

      //echo $Body;
      //exit();
      Redirect('http://excellenttutors.pl/Error', false);
    }

?>
