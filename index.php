<?php $lien = new mysqli("www.grantmukai.com:4579","cv_access","jenesaispasmaistuverras","cv");
/*Pour Québec SEULEMENT!!*/
$imageVille = 1;
$villeMax = 6;
/*Fin code spécifique au Québec */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/fr-CA/credits.php";
}  ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr-CA"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr-CA"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr-CA"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    
    <!-- Titre du Site -->
    <title>Grant Muka&iuml;</title>
    
    <meta name="description" content="Grant Muka&iuml; est d&eacute;veloppeur Web et agent de communications &agrave; Washington, District de Columbia">
    <meta name="keywords" content="web, communications, canada, québec, nouveau-brunswick, ontario, manitoba, yukon, cv, html, css, php">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Police Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap Coeur CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <!-- Icônes de Police CSS -->
    <link href="assets/plugins/icons-mind/style.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--Extensions CSS -->
    <link href="assets/plugins/jpreloader/css/jpreloader.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate-css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/magnificPopup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/flexSlider/flexslider.css" rel="stylesheet" type="text/css">
    
    <!-- CSS Principal-->
    <link href="assets/css/berg.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    header.hero {
        <?php if (isset($imageVille)) {
            echo "background-image: url('assets/images/villes/fr-CA/".$quelleVille.".jpg');";
            } else {
            echo "background-image: url('assets/images/bg4.jpg');";
            } ?>
    }
    </style>
    
    <!-- Couleur CSS -->
    <!--<link href="assets/css/colors/green.css" rel="stylesheet" type="text/css">-->
    
    <!-- Modernizr JS pour appuyer et les éléments HTML5 et requêtes médias de IE8 -->
    <!--[if lt IE 8]>
    <script src="assets/plugins/modernizr.min.js"></script>
    <![endif]-->
</head>

<!-- L'identité #page-top fait partie de la fonctionalité du défilement - les data-spy et data-target font partie de la fonction scrollspy intégré de Bootstrap -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66">
    <!--[if lt IE 10]>
        <p class="browserupgrade">Vous utilisez un navigateur <strong>obsol&eacute;te</strong>. Veuillez <a href="http://browsehappy.com/">mettre &agrave; jour votre navigateur</a> afin d'am&eacute;liorer votre exp&eacute;rience.</p>
    <![endif]-->

<?php
require 'sections/hero.php';
require 'sections/navigation.php';
require 'sections/profil.php';
//require 'sections/portfolio.php';
require 'sections/services.php';
require 'sections/forces.php';
require 'sections/cv_web.php';
require 'sections/cv_com.php';
require 'sections/competences.php';
require 'sections/connaissances.php';
require 'sections/contact.php';
require 'sections/pied.php';
?>
    
    <!-- Plugins JS -->
    <script src="assets/plugins/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jpreloader/js/jpreloader.min.js"></script>
    <script src="assets/plugins/detectmobilebrowser/detectmobilebrowser.js"></script>
    <script src="assets/plugins/debouncer/debouncer.js"></script>
    <script src="assets/plugins/easing/jquery.easing.min.js"></script>
    <script src="assets/plugins/sticky/jquery.sticky.js"></script>
    <script src="assets/plugins/inview/jquery.inview.min.js"></script>
    <script src="assets/plugins/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="assets/plugins/magnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/flexSlider/jquery.flexslider-min.js"></script>
    <script src="assets/plugins/countTo/jquery.countTo.js"></script>
    
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    
    <!-- Animation JS (Optional) -->
    <script src="assets/js/animation.js"></script>

</body>

</html>