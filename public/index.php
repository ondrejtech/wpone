<?php

require_once("app-path-manager.php");
require_once(APP_PATH . "app-manager.php");

____app_css_file_manager(
APP_INCLUDE_PATH . "res/css/css-file-manager.json",
APP_INCLUDE_PATH . "res/css/css-file-manager.css",
array(
"app_font_roboto_condensed",
"app_root",
"app_element",
"app_desktop",
"app_mobile",
)
);

____app_js_file_manager(
APP_INCLUDE_PATH . "res/js/js-file-manager.json",
APP_INCLUDE_PATH . "res/js/js-file-manager.js",
array(
"app_icon"	
),
array(
"app_element",
"app_desktop",
"app_mobile",
"app_ui_gallery"
)
);


?>

<!DOCTYPE html>
<html lang="cs">

<head>

<!-- doc_property -->
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no">
<!-- doc_property -->

<!-- doc_resource_hint -->
<link rel="preconnect" href="//fonts.googleapis.com" crossorigin="anonymous">
<link rel="preconnect" href="//ka-f.fontawesome.com" crossorigin="anonymous">

<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//ka-f.fontawesome.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">

<link rel="canonical" href="https://www.wpone.cz/" />
<!-- doc_resource_hint -->

<!-- doc_browser_tab -->
<link rel="shortcut icon" href="<?php echo APP_RES_PATH ?>res/favicon/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo APP_RES_PATH ?>res/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo APP_RES_PATH ?>res/favicon/favicon-16x16.png">
<link rel="mask-icon" href="<?php echo APP_RES_PATH ?>res/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo APP_RES_PATH ?>res/favicon/apple-touch-icon.png">
<link rel="manifest" href="<?php echo APP_RES_PATH ?>res/favicon/site.webmanifest">
<meta name="msapplication-config" content="<?php echo APP_RES_PATH ?>res/favicon/browserconfig.xml">

<meta name="theme-color" content="#dc6e2d" />
<meta name="msapplication-navbutton-color" content="#dc6e2d" />
<meta name="msapplication-TileColor" content="#dc6e2d" />
<meta name="apple-mobile-web-app-status-bar-style" content="#dc6e2d" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- doc_browser_tab -->

<!-- doc_metadata -->
<title>Automyčka Borská Pole - automyčka wpone, Plzeň, NC TESCO Borská Pole</title>
<meta name="description" content="Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků,
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21,
oplach sušícím přípravkem, 2x sušení, mytí podvozku, pěnový nanovosk s rozleštěním
+ vysatí celého interiéru včetně kufru, vyčištění palubní desky, vyčištění oken a zrcátek,
vytepování koberečků, provonění interiéru" />
<meta name="keywords" content="wpone, automyčka wpone, Plzeň, NC TESCO Borská Pole" />

<meta name="owner" content="WPONE, s.r.o. - IČO 05314291" />
<meta name="author" content="WPONE, s.r.o. - IČO 05314291" />
<meta name="copyright" content="WPONE, s.r.o. - IČO 05314291" />
<meta name="language" content="cs" />
<meta name="Classification" content='automyčka' />

<meta name='url' content='https://www.wpone.cz/' />
<meta name='identifier-URL' content='https://www.wpone.cz/' />
<meta name="coverage" content="Worldwide" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="7 days" />
<meta name="country" content="Czech republic" />
<meta name="rating" content="safe for kids" />
<meta name="doc-type" content="public" />
<meta name="contactName" content="WPONE, s.r.o. - IČO 05314291" />
<meta name="contactOrganization" content="WPONE, s.r.o. - IČO 05314291" />
<meta name="contactStreetAddress1" content="U Letiště 1139/6, 301 00 Plzeň 3-Skvrňany" />
<meta name="contactCity" content="Plzeň" />
<meta name="contactPhoneNumber" content="+420 703 339 456" />
<meta name="linkage" content="https://www.wpone.cz/" />
<!-- doc_metadata -->

<!-- doc_search_engine -->
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<meta name="google-site-verification" content="" />
<meta name="seznam-wmt" content="" />
<meta name="msvalidate.01" content="" />
<!-- doc_search_engine -->

<!-- doc_social_media -->
<meta name="og:title" content="WPONE.CZ - automyčka wpone, Plzeň, NC TESCO Borská Pole" />
<meta property="og:locale" content="cs_CZ" />
<meta name="og:type" content="website" />
<meta name="og:url" content="https://www.wpone.cz/" />
<meta name="og:image" content="https://www.wpone.cz/res/img/template/wpone-open-graph.jpg" />
<meta name="og:image:width" content="1920" />
<meta name="og:image:height" content="1440" />
<meta name="og:site_name" content="WPONE" />
<meta name="og:description" content="Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků,
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21,
oplach sušícím přípravkem, 2x sušení, mytí podvozku, pěnový nanovosk s rozleštěním
+ vysatí celého interiéru včetně kufru, vyčištění palubní desky, vyčištění oken a zrcátek,
vytepování koberečků, provonění interiéru" />
<meta name="og:phone_number" content="+420 703 339 456" />
<meta name="og:street-address" content="U Letiště 1139/6, 301 00 Plzeň 3-Skvrňany" />
<meta name="og:locality" content="Czech republic" />
<meta name="og:region" content="Czech republic" />
<meta name="og:postal-code" content="30100" />
<meta name="og:country-name" content="CZ" />

<meta name="fb:page_id" content="" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@publisher_handle" />
<meta name="twitter:title" content="WPONE.CZ - automyčka wpone, Plzeň, NC TESCO Borská Pole" />
<meta name="twitter:description" content="Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků,
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21,
oplach sušícím přípravkem, 2x sušení, mytí podvozku, pěnový nanovosk s rozleštěním
+ vysatí celého interiéru včetně kufru, vyčištění palubní desky, vyčištění oken a zrcátek,
vytepování koberečků, provonění interiéru" />
<meta name="twitter:creator" content="@wpone" />
<meta name="twitter:image:src" content="https://www.wpone.cz/res/img/template/wpone-open-graph.jpg" />
<!-- doc_social_media -->

<!-- doc_json_ld -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "WPONE, s.r.o. - IČO 05314291",
  "image": "https://www.wpone.cz/res/img/template/wpone-open-graph.jpg",
  "@id": "https://www.wpone.cz/",
  "url": "https://www.wpone.cz/",
  "telephone": "+420 703 339 456",
  "priceRange": "130-990",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "U Letiště 1139/6, 301 00 Plzeň 3-Skvrňany",
    "addressLocality": "Plzeň",
    "postalCode": "30100",
    "addressCountry": "CZ"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 49.72724969999999,
    "longitude": 13.3455339
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },
  "sameAs": "https://www.wpone.cz/" 
}
</script>

<!-- doc_json_ld -->

<!-- google_analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B8XZ93KM1S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B8XZ93KM1S');
</script>
<!-- google_analytics -->


<!-- doc_resource -->
<?php
require_once(APP_INCLUDE_PATH . "res/include/app-css-file-manager.php");
?>
<!-- doc_resource -->

</head>

<body>
<main class="app_dom_set">
<div class="app_dom_subset">

 
<!-- app_block_viewport_set -->
<div class="app_block_viewport_set" style="background-image: url(<?php echo APP_RES_PATH ?>res/img/template/wpone-automycka.jpg);">

<!-- header -->
<header>
<nav class="app_nav_bar_set">
<div class="app_nav_bar_subset">

<ul class="app_nav_bar_subset_menu">

<li>
<div class="app_nav_bar_subset_menu_item__left">
<p>nová generace</p>
</div>
</li>

<li>
<div class="app_nav_bar_subset_menu_item__center">
<a href="https://wpone.cz/">
<img src="<?php echo APP_RES_PATH ?>res/img/logo/wpone-logo.svg" alt="wpone logo">
</a>
</div>
</li>

<li>
<div class="app_nav_bar_subset_menu_item__right">
<p>mytí automobilů</p>
</div>
</li>
	

</ul>

</div>	
</nav>
</header>
<!-- end header -->

<!-- app_block_theme_set -->
<div class="app_block_theme_set">
<div class="app_block_theme_subset">

<div>

<div class="app_block_theme_subset__headline">
<h1>AUTOMYČKA <br/> <span>BORSKÁ</span> POLE</h1>
<h2>Plzeň, NC TESCO Borská Pole</h2>
</div>

<ul class="app_block_grid_set_a">

<li>
<div class="app_block_grid_set_a_item__left">

<a href="tel:703-339-456" class="app_block_grid_set_a_item__left_button">
<span class="app_block_grid_set_a_item__left_button_icon fas fa-phone-alt"></span>
<span>703 339 456</span>
</a>

</div>
</li>

<li>
<div class="app_block_grid_set_a_item__center">
<img src="<?php echo APP_RES_PATH ?>res/img/template/wpone-auto-v-mycce.jpg" alt="wpone auto v mycce">
</div>
</li>

<li>
<div class="app_block_grid_set_a_item__right">

<p>OTEVÍRACÍ DOBA:</p>
<p>PO-NE</p>
<p>9-18</p>

</div>
</li>

</ul>

</div>

</div>
</div>
<!-- end app_block_theme_set -->


</div>
<!-- end app_block_viewport_set -->

<!-- app_block_viewport_set -->
<div class="app_block_viewport_set app_block_viewport_set_b" style="background-image: url(<?php echo APP_RES_PATH ?>res/img/template/wpone-myti-auta.jpg);">

<!-- app_block_price_list_set -->
<div class="app_block_price_list_set">
<div class="app_block_price_list_subset">

<!-- app_block_price_list_subset_header -->
<div class="app_block_price_list_subset_header">

<div class="app_block_price_list_subset_header_a">
<img src="<?php echo APP_RES_PATH ?>res/img/logo/wpone-logo.svg" alt="wpone logo">
</div>

<div class="app_block_price_list_subset_header_b">
<p>MYCÍ PROGRAMY</p>
</div>

</div>
<!-- end app_block_price_list_subset_header -->

<!-- app_block_price_list_subset_body -->
<div class="app_block_price_list_subset_body">

<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p class="app_block_price_list_title_highlight_a">NOVINKA!</p>
<p>PROGRAM <span>1</span></p>
<p class="app_block_price_list_title_highlight_b">AUTO JAKO NOVÉ</p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
<strong>Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků,</strong><br />
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21",<br />
oplach sušícím přípravkem, 2x sušení, <strong> mytí podvozku, pěnový nanovosk s rozleštěním </strong> <br />
<span class="app_text_formatting_highlight">+ vysatí celého interiéru včetně kufru, vyčištění palubní desky, vyčištění oken a zrcátek, <br />
vytepování koberečků, provonění interiéru</span>
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>990 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->

<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p>PROGRAM <span>2</span></p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
<strong>Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků, </strong> <br />
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21", <br />
oplach sušícím přípravkem, 2x sušení, <strong>mytí podvozku, pěnový nanovosk s rozleštěním </strong> <br />
<span><span class="app_text_formatting_highlight">+ luxování vozidla (4 min), utření prahů a palubní desky</span></span>
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>299 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->

<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p>PROGRAM <span>3</span></p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
<strong>Ruční předmytí wap + chemický přípravek na odstranění hmyzu a chemické předmytí disků, </strong> <br />
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21", <br />
oplach sušícím přípravkem, 2x sušení, <strong> mytí podvozku, pěnový nanovosk s rozleštěním </strong>
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>260 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->

<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p>PROGRAM <span>4</span></p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
Ruční předmytí, pěnově předmytí, vysokotlak střešní, vysokotlak boční, <br />
2x kartáč. mytí + šampón + mytí kol 21", oplach sušícím přípravkem, 2x sušení, <br />
<strong>mytí podvozku, pěnový nanovosk bez rozleštění </strong>
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>230 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->

<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p>PROGRAM <span>5</span></p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21", <br />
oplach sušícím přípravkem, 2x sušení, <strong> brilantní vosk </strong>
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>170 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->


<!-- app_block_price_list_subset_body_item -->
<div class="app_block_price_list_subset_body_item">

<div class="app_block_price_list_subset_body_item_title">
<p>PROGRAM <span>6</span></p>
</div>

<div class="app_block_price_list_subset_body_item_content">
<p>
Pěnově předmytí, vysokotlak střešní, vysokotlak boční, 2x kartáč. mytí + šampón + mytí kol 21", <br />
oplach sušícím přípravkem, 2x sušení
</p>
</div>

<div class="app_block_price_list_subset_body_item_price">
<p>130 Kč</p>
</div>

</div>
<!-- end app_block_price_list_subset_body_item -->

</div>
<!-- app_block_price_list_subset_body -->


<!-- app_block_price_list_subset_header -->
<div class="app_block_price_list_subset_footer">

<span class="app_block_price_list_subset_footer_item">
<img src="<?php echo APP_RES_PATH ?>res/img/vector/icon-payment-visa.svg" alt="wpone platba visa">
</span>

<span class="app_block_price_list_subset_footer_item">
<img src="<?php echo APP_RES_PATH ?>res/img/vector/icon-payment-mastercard.svg" alt="wpone platba mastercard">
</span>

<span class="app_block_price_list_subset_footer_item">
<img src="<?php echo APP_RES_PATH ?>res/img/vector/icon-payment-apple-pay.svg" alt="wpone platba apple pay">
</span>

<span class="app_block_price_list_subset_footer_item">
<img src="<?php echo APP_RES_PATH ?>res/img/vector/icon-payment-google-pay.svg" alt="wpone platba google pay">
</span>

</div>
<!-- end app_block_price_list_subset_header -->

</div>
</div>

<!-- end app_block_price_list_set -->

</div>
<!-- end app_block_viewport_set -->


<!-- app_block_viewport_set -->
<div class="app_block_viewport_set app_block_viewport_set_c" style="background-image: url(<?php echo APP_RES_PATH ?>res/img/template/wpone-auto-interier.jpg);">


<!-- app_gallery_set -->
<div class="app_gallery_set">
<div class="app_gallery_subset">

<div class="app_gallery_subset_headline">
<h2>GALERIE</h2>
</div>

<!-- app_gallery_subset_content -->
<div class="app_gallery_subset_content">

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-001.jpg" alt="automyčka wpone">
</div>

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-002.jpg" alt="automyčka wpone">
</div>

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-003.jpg" alt="automyčka wpone">
</div>

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-004.jpg" alt="automyčka wpone">
</div>

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-005.jpg" alt="automyčka wpone">
</div>

<div class="app_gallery_subset_content_item">
<img src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-004.jpg" alt="automyčka wpone">
</div>


</div>
<!-- app_gallery_subset_content -->

<!-- app_gallery_subset_lightbox -->
<div class="app_gallery_subset_lightbox">

<div class="app_gallery_subset_lightbox_preview">
<div class="app_gallery_subset_lightbox_preview_content">
<img class="app_gallery_lightbox_preview_item" src="<?php echo APP_RES_PATH ?>res/img/gallery/wpone-galerie-myti-auta.jpg" alt="" />
</div>
</div>

<button class="app_gallery_subset_lightbox_button_close">
<span class="fal fa-times"></span>
</button>

<button class="app_gallery_subset_lightbox_button_next">
<span class="fal fa-angle-right"></span>
</button>

<button class="app_gallery_subset_lightbox_button_prev">
<span class="fal fa-angle-left"></span>
</button>


</div>
<!-- end app_gallery_subset_lightbox -->

</div>
</div>
<!-- end app_gallery_set -->


<!-- app_block_location_set -->
<div class="app_block_location_set">
<div class="app_block_location_subset">

<div class="app_block_location_subset_headline">
<h2>KDE NÁS NAJDETE</h2>
<p>Plzeň, NC TESCO Borská Pole</p>
</div>

<div class="app_block_location_map_set">

<a href="https://www.google.com/maps/place/WP+ONE+automy%C4%8Dka/@49.7269459,13.3457849,17.75z/data=!4m12!1m6!3m5!1s0x0:0xd698fbdc1bbefd3d!2sTesco!8m2!3d49.7282122!4d13.3433672!3m4!1s0x470aed2d9f44c439:0x8b3461b6667d6e5d!8m2!3d49.7270739!4d13.3457554" target="_blank" class="app_block_location_map_set_a">

<img class="app_block_location_map_set_a_area_pointer" src="<?php echo APP_RES_PATH ?>res/img/logo/wpone-location.svg" alt="wpone lokace" />

<div class="app_block_location_map_set_area">
<img src="<?php echo APP_RES_PATH ?>res/img/template/wpone-mapa.png" alt="wpone mapa" />
</div>

<div class="app_block_location_map_set_map_detail">
<img src="<?php echo APP_RES_PATH ?>res/img/template/wpone-detail-mapy.jpg" alt="wpone mapa" />
</div>

</a>

<div class="app_block_location_map_set_b">
<p>OTEVÍRACÍ DOBA:</p>
<p>PO-NE 9-18</p>	
</div>


</div>

</div>
</div>
<!-- end app_block_location_set -->



</div>
<!-- end app_block_viewport_set -->

<footer class="app_footer_set">
<div class="app_footer_subset">

<div class="app_footer_subset_a">

<div class="app_footer_subset_a_content">

<div class="app_footer_subset_item">
<p>PROVOZOVATEL:</p>
<ul>
<li>WPONE, s.r.o. - IČO 05314291</li>
<li>Malátova 509/4, 150 00 Praha 5</li>
</ul>
</div>

<div class="app_footer_subset_item">
<p>ODPOVĚDNÁ OSOBA:</p>
<ul>
<li>Nedžad Sulejmani</li>
<li></li>
</ul>
</div>

</div>

</div>

<div class="app_footer_subset_b">
<p>Copyright © 2022 | WPONE, s.r.o.</p>
</div>

</div>
</footer>


</div>
</main>

<?php
require_once(APP_INCLUDE_PATH . "res/include/app-js-file-manager.php");
?>

</body>

</html>