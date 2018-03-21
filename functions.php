<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// globalne pola strony

add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Globalne pola', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Globalne opcje</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Numer telefonu na górze strony:</strong><br />
	<input type="text" name="mytel" size="45" value="<?php echo get_option('mytel'); ?>" /></p>

  <p><strong>Url obrazka w menu:</strong><br />
	<input type="text" name="url_baner" size="80" value="<?php echo get_option('url_baner'); ?>" /></p>
	 <img src="<?php echo get_option('url_baner'); ?>" style="width:200px;">

	<p><strong>Opis strony dla google:</strong><br />
	<textarea name="meta_google" rows="4" cols="80"><?php echo get_option('meta_google'); ?></textarea>

	<p><strong>Główny mail na stronie - do biura np.:</strong><br />
	<textarea name="meta_mail" rows="2" cols="80"><?php echo get_option('meta_mail'); ?></textarea>

	<p><strong>Słowa kluczowe strony:</strong><br />
	<textarea name="meta_key" rows="3" cols="80"><?php echo get_option('meta_key'); ?></textarea>

	<p><strong>Autor strony:</strong><br />
	<input type="text" name="author" size="80" value="<?php echo get_option('author'); ?>" /></p>

	<p><strong>NIP:</strong><br />
	<input type="text" name="nip" size="80" value="<?php echo get_option('nip'); ?>" /></p>

	<p><strong>REGON:</strong><br />
	<input type="text" name="regon" size="80" value="<?php echo get_option('regon'); ?>" /></p>

	<p><strong>ADRES:</strong><br />
	<input type="text" name="adres" size="80" value="<?php echo get_option('adres'); ?>" /></p>

	<p><strong>NAZWA FIRMY:</strong><br />
	<input type="text" name="nazwa_firmy" size="80" value="<?php echo get_option('nazwa_firmy'); ?>" /></p>

	<p><strong>Link do obrazka, który będzię tłem całej strony:</strong><br />
	<input type="text" name="tlo_strony" size="80" value="<?php echo get_option('tlo_strony'); ?>" /><br>
  <img src="<?php echo get_option('tlo_strony'); ?>" style="width:20%;" /></p>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="mytel,url_baner,meta_google,meta_mail,meta_key,author,nip,regon,adres,nazwa_firmy,tlo_strony" />

	</form>
	</div>
  <?php
}

require_once ('simple_html_dom.php');

function theme_styles(){
  wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	// wp_enqueue_script( 'velocity', get_template_directory_uri() .'/js/velocity.min.js' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function galeria_slajdy( $atts, $content ) {

		$exp = array();
		$alt = array();
		$cap = array();
		$link = array();

		$ht = str_get_html($content);

		foreach($ht->find('img') as $element) {

			 array_push($exp,$element->src);

			 $tt = $element->alt;
			 $tt2 = explode('#',$tt);
			 array_push($alt,$tt2[0]);
			 array_push($cap,$tt2[1]);
			 array_push($link,$tt2[2]);

		}

		// print_r($content);

    $html = '<div class="d-md-none d-block">
							<div class="d-none d-sm-block" style="background-color:lightgrey;padding:1em;">
								<h5 style=" text-align:center; color:rgba(0,0,0,0.5)">
								'.$alt[0].'
								</h5>
							</div>
							<div>
							<img src="'.$exp[0].'"'. ' ' .'style="width:100%;">
							</div>
						</div>
						<div class="bd-example galeria_duza_kontener d-none d-md-block">
            <div id="nawigacja_karuzeli_galerii_duzej_1"
            class="carousel slide" data-ride="carousel"
            >
            <ol class="carousel-indicators">';
            $ind = 0;


          while($ind<count($exp)){

            $src = $exp[$ind];


                  if($ind == 0){

                    $html .= '<div data-target="#nawigacja_karuzeli_galerii_duzej_1" data-slide-to="' . $ind . '"
										class="bullet" style="">
                    </div>';
                  }
                  if($ind > 0){
                    $html .= '<div data-target="#nawigacja_karuzeli_galerii_duzej_1" data-slide-to="' . $ind . '"
										class="bullet " style="">
                    </div>';
                  }
            $ind++;
          }
          $ind = 0;
          $html .= '</ol>';
          $html .= '<div class="carousel-inner" role="listbox">';
          while($ind<count($exp)){

            $src2  = $exp[$ind];
						$meta_alt = $alt[$ind];
						$meta_cap = $cap[$ind];
						$meta_link = $link[$ind];

            if($ind == 0){

              $html .= '
                <div class="carousel-item active">
                  <img id="" class="d-block img-fluid galeria_zdj" data-custom-src="'.$src2.'" alt=""
                  src="" data-holder-rendered="true" style="background-image:url('.$src2.');"
                   >
                  <div class="carousel-caption d-md-block opis_karuzela black_high">

									<div style="position:absolute; left:50%; top:-650%;">

										<h1 class="galeria_tekst">
										'.$meta_alt.'
										</h1>

										<div class="" style="position:relative;left:-50%; padding:1em;">'
											.( isset($meta_cap)  ?
											'<a href="'. $meta_link .'" style="display:block;">
											<h2 class="galeria_tekst2">'.$meta_cap.'</h2></a>': ' ').

										'</div>

									</div>

                  </div>
                </div>';
            }
            if($ind > 0){
              $html .= '
                <div class="carousel-item">
                  <img id="" class="d-block img-fluid galeria_zdj" data-custom-src="'.$src2.'" alt=""
                  src="" data-holder-rendered="true" style="background-image:url('.$src2.');"
                   >
                  <div class="carousel-caption d-md-block opis_karuzela black_high">

									<div style="position:absolute; left:50%; top:-650%;">

										<h1 class="galeria_tekst">
										'.$meta_alt.'
										</h1>

										<div class="" style="position:relative;left:-50%; padding:1em;">'
											.( isset($meta_cap)   ?
											'<a href="'. $meta_link .'" style="display:block;">
											<h2 class="galeria_tekst2">'.$meta_cap.'</h2></a>': ' ').

										'</div>

									</div>

                  </div>
                </div>';
            }
            $ind++;
          }

          $html .= '</div>';
          $html .='<a class="carousel-control-prev" data-target="#nawigacja_karuzeli_galerii_duzej_1" role="button" data-slide="prev"
          style="">
                    <span class="carousel-control-prev-icon" aria-none="true" style=""></span>
                    <span class="sr-only">Previous</span>
                  </a>

              <a class="carousel-control-next" data-target="#nawigacja_karuzeli_galerii_duzej_1" role="button" data-slide="next"
              style="">
                <span class="carousel-control-next-icon" aria-none="true" style=""></span>
                <span class="sr-only">Next</span>
              </a>';

      $html .= "</div></div>";

      return $html;
}

add_shortcode( 'galeria_slajdy', 'galeria_slajdy' );

//baner

function baner ( $atts){

$html =  '<section id="" class="tlo_zapisz_sie" style="margin-top:2em;">
  <div class="row wrapper" style="">
    <div class="col-sm-12 row text-center padder" style="  ">
      <div class="col-sm-8 ">
        <h1 class="text-center mar-center" style="">
          ' . $atts['tekst'] . '
        </h1>
      </div>
      <div class="col-sm-4 text-center  mar-center" >
        <a href="' .$atts['link'] . '">
          <div class="wrap-button d-inline-block gold_button d-sm-block" style="">
          ' .  $atts['guzik'] . '
          </div>
        </a>
      </div>
    </div>
  </div>
</section>';

return $html;
}

add_shortcode( 'baner', 'baner' );

function gradient ($content){
	$html =  '
	<section id="" class="tlo_zapisz_sie" style="margin-top:2em;">
	  <div class="row wrapper" style="">
	    <div class="col-sm-12 row text-center padder" style="  ">
	      	<div class="container col-md-12">'.$content.'</div>
	    </div>
	  </div>
	</section>';

	return $html;
}

add_shortcode( 'gradient', 'gradient' );

// Connect the WordPress post editor to your custom stylesheet
function my_theme_add_editor_styles() {
  add_editor_style( 'admin.css' );
}

add_action( 'admin_init', 'my_theme_add_editor_styles' );

//custom post types - tutorzy
function create_posttype() {

    register_post_type( 'tutorzy',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'tutorzy' ),
                'singular_name' => __( 'tutorzy' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array( 'category' ),
            'rewrite' => array('slug' => 'tutorzy'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


//remove editor from custom posts types
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {

  remove_post_type_support('tutorzy', 'editor');

	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		if( !isset( $post_id ) ) return;
		// Hide the editor on a page with a specific page template
		// Get the name of the Page Template file.
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		if($template_file == 'page-cennik.php'){ // the filename of the page template
			remove_post_type_support('page', 'editor');
		}
}


//help hints
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'Instrukcje', 'Instrukcje pisania stron i postów', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6  );
}
function myplguin_admin_page(){
	?>
	<style>
	strong{color:red;}
	img{max-width: 600px;}
	</style>
	<div class="wrap">
		<h2>Instrukcje</h2>
	</div>
	<div class="">
		<p>Wszystkie strony tworzone są w edytorach tekstowych. Żeby uzyskać prawidłowy efekt, należy otaczać tekst i zdjęcia odpowiednimi kodami zamkniętymi w nawiasach [ ]. <p>Lista możliwości:

<h2>Galeria - slider:</h2>

<p><strong>[do_gallery]</strong>  tutaj wklej zdjęcia używając guzika "dodaj medium" <strong>[/do_gallery]</strong>

<p>Dodatkowe ustawienia <strong>[do-gallery]</strong> :
<p>Po kliknięciu na dodane zdjęcie, klikamy na ołówek, co przenosi nas do szczegółów obrazka. Wpisując w polu "Tekst alternatywny" tekst, pojawi się on na slajdzie w galerii.
<p>Przykład:

<p>Po prostu Excellent # szczegóły # http://excellenttutors.dev/index.php/cennik/ .

<p>Separator # oddziela całostki, pierwsza całostka to motto, druga to tekst w guziku, a trzecia to link, do którego przekierowuje guzik. Jeżeli nie zostanie wypełniona któraś z dalszych całostek, tylko ona nie pojawi się ona na slajdzie.

<p>Kod tworzy następującą galerię (fragment):
	<img src="https://i.imgur.com/6GYgzvo.jpg" />
<p>UWAGA - kolor tekstu dopasowuje się automatycznie do koloru tła, więc wrzucając ciemne zdjęcie - tekst automatycznie zmieni kolor na biały oraz odwrotnie.
<p></p>
<h2>Kolumny i rzędy:</h2>
<p>Do tworzenia kolumn i rzędów służy następująca konstrukcja:

<strong><p>[container]<p>
    <p>[row]<p>
        <p>[column md="4"]<p>
				</strong> <p>Twój tekst / ikona / obrazek ...<p><strong>
        <p>[/column]<p>
        <p>[column md="4"]<p>
				</strong> <p>Twój tekst / ikona / obrazek ...<p><strong>
        <p>[/column]<p>
        <p>[column md="4"]<p>
				</strong> <p>Twój tekst / ikona / obrazek ...<p><strong>
						 <p>[/column]<p>
							 <p>[/row]<p>
<p>[/container]</p></strong>

		<p>Jest to konstrukcja przykładowa. Kod [container] inicjuje kolumny i rzędy. W środku niego umieszcza się rzędy - <strong>[row]</strong> i kolumny - <strong>[column]</strong>. Każdy rząd można podzielić na 12 kolumn, przy czym każda kolumna może zajmować więcej niż jedną niszę. Wskażnik<strong> md="liczba"</strong> w <strong>[column]</strong> oznacza liczbę nisz, które ma zajmować kolumna. Trzy kolumny <strong>md="4"</strong> zajmą więc po równo 3 miejsca w rzędzie, a cztery kolumny <strong>md="3"</strong> zajmą cztery miejsca w rzędzie, dwie kolumny <strong>md="6"</strong> zajmą dwa miejsca w rzędzie. Każdy element, który przekroczy 12 nisz, będzie automatycznie wrzucany poniżej z zachowaniem wymiaru, dlatego np. sześć kolumn <strong>md="4"</strong> zajmie w pełni dwa rzędy i podzieli kontener na trzy kolumny. Gotowe konstrukcje można dodawać również poprzez guzik B w edytorze.

			<p>Przykład tego, co tworzy kod: <img src="https://i.imgur.com/RwzsCzK.jpg" />

		<h2>Ikony:</h2>
		<p>Do każdego elementu można dodawać ikony poprzez guzik "insert icon".

		<h2>Baner</h2>
		<p>Kod <strong>[baner]</strong> tworzy następujący element:<img src="https://i.imgur.com/KzdfM9p.jpg"/>

			<p>Kod przyjmuje trzy argumenty w środku - tekst, guzik i link. Przykład kodu:
			<p><strong>[baner tekst="Pragniesz korepetycji marzeń?" guzik="ZAPISZ SIĘ !" link="http://excellenttutors.dev/index.php/zapisz-sie/"]</strong>

				<h2>Gradient</h2>
				<p> Kod <strong>[gradient]</strong> Twoje własne treści <strong>[/gradient]</strong> tworzy specjalne tło pod tekstem i obrazami, które wygląda tak samo jak w banerze.
	</div>
	<?php
}
