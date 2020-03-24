<?php

/*
Plugin Name: Coronavirus Live update WordPress Plugin
Plugin URI: https://risecommerce.com/
description: This plugin  displays real time data of Coronavirus  (COVID-19) it uses api to display the real time data of All countries Or Single Country as well as Total cases, Cases Today, Number of Deaths, How Many Recovered, All Active Cases, Today's Deaths, Critical, Average Cases Per One Million etc. All Data is real time powered by official WHO API
Version: 1.2.2
Author: Mr. Sanjeev
License: MIT, Opensource
*/


if (!defined('ABSPATH')) exit;

add_action( 'admin_menu', 'coronavirus_live_update' );
function coronavirus_live_update(){
	$page_title = 'Coronavirus Live update';
	$menu_title = 'Coronavirus Live update';
	$capability = 'manage_options';
	$menu_slug  = 'coronavirus-live-update';
	$function   = 'my_admin_page_contents';
	$icon_url   = 'dashicons-media-code';
	$position   = 4;
	add_menu_page( $page_title,$menu_title,$capability, $menu_slug,$function,$icon_url,$position); }



function my_admin_page_contents() {

?>

<h1>

<?php esc_html_e( 'used shotcode [covid19].', 'my-plugin-textdomain' ); ?>

</h1>

<?php

}
function kwp_covid19_wp2020(){
    $language = get_locale();
    if($language == 'es_ES' || $language == 'es_CL' || $language == 'es_VE' || $language == 'es_MX' || $language == 'es_AR' || $language == 'es_GT' || $language == 'es_CR' || $language == 'es_CO' || $language == 'es_PE'){
        $urlInfoCovid19 = 'https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses';
        $hashTagCodiv19 = 'YoMeInformo';
    } elseif($language == 'en_AU' || $language == 'en_GB' || $language == 'en_ZA' || $language == 'en_CA' || $language == 'en_NZ'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IinformMyself';
    } elseif($language == 'it_IT'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'MiInformo';
    } elseif($language == 'fr_CA' || $language == 'fr_BE' || $language == 'fr_FR'){
        $urlInfoCovid19 = 'https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses';
        $hashTagCodiv19 = "JeMinforme";
    } elseif($language == 'de_DE' || $language == 'de_AT' || $language == 'de_CH' || $language == 'de_CH_informal' || $language == 'de_DE_formal'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IchInformiereMich';
    } elseif($language == 'nb_NO'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'JegInformererMeg';
    } else {
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IinformMyself';
    }
    if ( ! is_admin() ) { ?>
    <a class="covid_19" href="<?php echo $urlInfoCovid19 ?>" target="_blank" rel="nofollow"><img src="<?php echo esc_url( plugins_url( 'assets/images/h-logo-blue.svg', __FILE__ ) ); ?>"><p>#<?php echo $hashTagCodiv19; ?></p></a>
    <style>
        .covid_19 {position:fixed;bottom:10px;left:10px;width: 220px;padding:10px;background-color: #f5f5f5;z-index: 999;border: 1px solid #ccc;text-decoration:none;}
        .covid_19 img {max-width: 100%;max-height: 50px;margin: 0 10px;}
        .covid_19 p{font-size: 18px;font-weight: 800;text-align: center;color: #555555;margin:10px;margin-bottom:0px;}
        @media screen and (max-width: 768px) {.covid_19 {width:100%;bottom:0;left:0;display:flex;align-items:center;border-bottom:0px;border-left:0px;border-right:0px;padding:0px;}.covid_19 img, .covid_19 p{width: 46%; margin: 10px 2%;}.covid_19 p{margin-bottom: 0; margin-top: 0;}}
        @media screen and (max-width: 479px) {.covid_19 p{font-size:15px;}}
    </style>
    <?php
    }
}
add_action('wp_footer', 'kwp_covid19_wp2020', 20);


function cotag_func() { ?>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">


body{margin-top:20px;}
/* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
}
@media only screen and (min-width: 1168px){
.entry .entry-content > *, .entry .entry-summary > *, .entry .entry-summary > .wp-block-group > .wp-block-group__inner-container > *, .entry .entry-content > .wp-block-group > .wp-block-group__inner-container > * {
    max-width: 100%;
}
}
/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.carbon-example {
  padding: 8px;
  background-color: #fff;
  box-sizing: border-box;
  border-radius: 6px;
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  position: relative;
  z-index: 5;
  box-shadow: 0 2px 20px 0 rgba(0, 0, 0, 0.1);
  margin-top:20px;
}

.carbon-example img {
  margin-right: 9px;
  max-width: 125px;
}

.carbon-example .inner-wrapper {
  text-align: left;
}
.input-group {
    position: relative;
    border-collapse: separate;
    display: block;
}
.carbon-example .inner-wrapper p {
  font-size: 12px;
  line-height: 1.33;
  margin: 8px 0;
}

.carbon-example .inner-wrapper p.fine-print {
  font-size: 8px;
  color: #C5CDD0;
  line-height: 1.25;
  text-transform: uppercase;
  font-weight: 500;
}

.flex-wrapper {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  -moz-justify-content: space-between;
  justify-content: space-between;
}
@media screen and (max-width: 991px) {
  .flex-wrapper.two-col {
    display: block;
    text-align: center;
  }
}

.flex-wrapper.two-col > * {
  width: 50%;
}

.flex-wrapper.two-col > *:first-of-type {
  padding-right: 130px;
}
@media screen and (max-width: 991px) {

  .flex-wrapper.two-col > * {
    width: 100%;
  }

  .flex-wrapper.two-col > *:first-of-type {
    padding-right: 0;
  }
}

.flex-wrapper.two-col.reversed > *:first-of-type {
  order: 2;
  padding-right: 0;
}
@media screen and (min-width: 992px) {
  .flex-wrapper.two-col.reversed > *:first-of-type {
    padding-left: 130px;
  }
}

.flex-wrapper.three-col {
  text-align: left;
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  margin-top: 40px;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col {
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }
}
.flex-wrapper.three-col > * {
  width: 33.3%;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col > * {
    width: 100%;
  }
}
@media screen and (min-width: 768px) {
  .flex-wrapper.three-col li {
    padding-left: 20px;
    padding-right: 20px;
  }
  .flex-wrapper.three-col li:first-child {
    padding-left: 0;
  }
  .flex-wrapper.three-col li:last-child {
    padding-right: 0;
  }
}

.flex-wrapper.three-col .flex-wrapper {
  -webkit-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  -moz-align-items: flex-start;
  align-items: flex-start;
  margin-top: 0;
}
@media screen and (max-width: 767px) {
  .flex-wrapper.three-col .flex-wrapper {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    justify-content: center;
  }

  .flex-wrapper.three-col .flex-wrapper:not(:first-of-type) {
    margin-top: 40px;
  }
}

.flex-wrapper.three-col .flex-wrapper .icon {
  top: 0;
  transform: none;
}
    </style>

<h1 style="text-align: center;">Coronavirus / COVID - 19 Update in the World by <?php echo date("l jS \of F Y")  ?> Today</h1>
     <div class="row">
        <?php

        $statisticsJson1 = file_get_contents("https://corona.lmao.ninja/all");
        $statisticsObj1 = json_decode($statisticsJson1);

      ?>

            <div class="col-md-3">
            <div class="carbon-example flex-wrapper">

                <div class="inner-wrapper">
                   <p class="country" style="font-weight: bold;">Cases : <?php  echo $statisticsObj1->cases ?></p>


                </div>

            </div>
        </div>
         <div class="col-md-3">
            <div class="carbon-example flex-wrapper">

                <div class="inner-wrapper">
                   <p class="country" style="font-weight: bold;">Deaths : <?php  echo $statisticsObj1->deaths ?></p>


                </div>

            </div>
        </div>
       <div class="col-md-3">
            <div class="carbon-example flex-wrapper">

                <div class="inner-wrapper">
                   <p class="country" style="font-weight: bold;">Recovered : <?php  echo $statisticsObj1->recovered ?></p>
                   </div>

            </div>
        </div>
       <div class="col-md-3">
            <div class="carbon-example flex-wrapper">

                <div class="inner-wrapper">
                   <p class="country" style="font-weight: bold;">Updated : <?php  echo $statisticsObj1->updated ?></p>

                   </div>

            </div>
        </div>


    </div>

    <h2 style="text-align: center;">Corona virus News Update by Country  <?php echo date("l jS \of F Y")  ?> Today</h2>





    <div class="row" id="myUL">
        <?php

        $statisticsJson = file_get_contents("https://corona.lmao.ninja/countries");
       $statisticsObj = json_decode($statisticsJson);
       foreach($statisticsObj as $key=>$val){ ?>

            <div class="col-md-4">
            <div class="carbon-example flex-wrapper">

                <div class="inner-wrapper col-md-12">
                <h5><a href="by.php?country=<?php  echo $val->country ?>"><p class="country" style="font-weight: bold;">Coronavirus update in <?php  echo $val->country ?></p></a>
</h5>
                <div class=" col-md-6">
                   <p>Cases : <?php  echo $val->cases ?></p>
                   <p>Today Cases : <?php  echo $val->todayCases ?></p>
                   <p>Deaths : <?php  echo $val->deaths ?></p>
                   <p>TodayDeaths : <?php  echo $val->todayDeaths ?></p>
                </div>
                <div class=" col-md-6">

                   <p>Recovered : <?php  echo $val->recovered ?></p>
                   <p>Active : <?php  echo $val->active ?></p>
                   <p>Critical : <?php  echo $val->critical ?></p>
                   <p>Cases Per Million: <?php  echo $val->casesPerOneMillion ?></p>

                </div>
                </div>
            </div>
        </div>
      <?php }  ?>




    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
     setTimeout(function(){
        location.reload();
    }, 55000);

});

</script>

<?php }
add_shortcode( 'covid19', 'cotag_func' );
