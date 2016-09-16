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
<<<<<<< HEAD
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
=======
?>    
    
    <!-- PORTFOLIO SECTION START --
    <section id="portfolio" class="section">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">My Latest Work</h2>

                        <p class="section-subtitle">I'm looking to expand my portfolio while I'm on top and while I'm young.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 --
                </div>
                <!-- //.row --
                
                <!-- PORTFOLIO START
                <div class="portfolio">
                    <div class="row">
                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-1.jpg" class="zoom" title="Buzz Lightyear">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/25963987/Buzz-Lightyear" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Buzz Lightyear</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-1.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-2.jpg" class="zoom" title="Robosam 3">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/25344153/Robosam-3" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Robosam 3</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-2.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-3.jpg" class="zoom" title="Coke Man and Dog">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/25821381/Coke-Man-and-Dog" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Coke Man and Dog</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-3.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-4.jpg" class="zoom" title="Speed Projects">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/20195929/Speed-Projects" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Speed Projects</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-4.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-5.jpg" class="zoom" title="Wooden Rhinoceros Beetle">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/26043281/Wooden-Rhinoceros-Beetle" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Wooden Rhinoceros Beetle</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-5.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-6.jpg" class="zoom" title="The First Encounter">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/25505317/The-first-Encounter" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>The First Encounter</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-6.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-7.jpg" class="zoom" title="Dead Pool">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/25763797/DEADPOOL" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Dead Pool</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-7.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="assets/images/portfolio/project-image-8.jpg" class="zoom" title="Rebus II">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="https://www.behance.net/gallery/19401293/Rebus-2" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link --

                                <div class="project-title">
                                    <h4>Rebus II</h4>
                                </div>
                                <!-- //.project-title --

                                <img src="assets/images/portfolio/project-image-8.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper --
                        </div>
                        <!-- //.item --
                    </div>
                    <!-- //.row --
                </div>
                <!-- PORTFOLIO END --
            </div>
            <!-- //.section-content -->
        </div
        <!-- //.container-fluid --
    </section>
    <!-- //PORTFOLIO SECTION END -->
    
    
    <!-- DÉBUT SECTION SERVICES -->
    <section id="services" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Ce Que Je Fais</h2>

                        <p class="section-subtitle">
                            J'aime ce que je fais. Je suis fier de ce que je fais. Et je ne peux pas faire juste la moiti&eacute;, trois-quarts, neuf-dixi&egrave;mes de quelque chose. Si je vais embarquer sur un projet, j'y vais jusqu'au bout.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
            
                <!-- DÉBUT SERVICES -->
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                            <div class="inner-content">
                                <i class="icon-Pen colored-text"></i>

                                <h4>1. R&eacute;daction</h4>

                                <p class="text-grey">
                                    Puisque j'ai obtenu mon bac en journalisme, je sais bien &eacute;crire tant en ligne comme &agrave; l'&eacute;crit et j'ai employ&eacute; mes comp&eacute;tences pour publier des nouvelles et pour mettre les petites entreprises en vedette dans l'espace de marketing.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top match-height">
                            <div class="inner-content">
                                <i class="icon-Film-Board colored-text"></i>

                                <h4>2. Multim&eacute;dia</h4>

                                <p class="text-grey">
                                    Dans mes anciens jours, je travaillais en tant qu'animateur &agrave; la t&eacute;l&eacute; et monteur de vid&eacute;o. Je realisais mes propres reportages du d&eacute;but jusqu'&agrave; la fin en produisant mes propres effets sp&eacute;ciaux.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                            <div class="inner-content">
                                <i class=" icon-Email colored-text"></i>

                                <h4>3. Conc&eacute;ption de Courriel</h4>

                                <p class="text-grey">
                                    En comprenant que la conc&eacute;ption de courriel n'est pas pareille que celle du Web, je suis comp&eacute;tent avec le code &ldquo;obsol&egrave;te&rdquo; HTML et CSS. De plus, j'ai une bonne id&eacute;e de ce qu'Outlook accepte et n'accepte pas.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        
                        <div class="col-sm-4 col-md-4 item match-height">
                            <div class="inner-content">
                                <i class="icon-Code-Window colored-text"></i>

                                <h4>4. Code Propre</h4>

                                <p class="text-grey">
                                    Je suis s&eacute;rieux en &eacute;crivant seulement du code HTML5, CSS3 et PHP7 le plus propre et &agrave; jour. Mon code est correctement dent&eacute;l&eacute; et il suit les standards &eacute;tablis par le W3C.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item dark-bg match-height">
                            <div class="inner-content">
                                <i class="icon-Cursor-Click2 colored-text"></i>

                                <h4>5. Sites Web Adaptifs</h4>

                                <p class="text-grey">
                                    Je comprend non seulement l'impl&eacute;mentation des requ&ecirc;tes m&eacute;dias pour flotter et mettre &agrave; l'&eacute;chelle du contenu pour les sites Web adaptifs, je comprend aussi les meilleures pratiques pour cr&eacute;er un courriel adaptif (si support&eacute;).
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item match-height">
                            <div class="inner-content">
                                <i class="icon-First-Aid colored-text"></i>

                                <h4>6. Soutien</h4>

                                <p class="text-grey">
                                    Bien que j'offre des services Web pour mon association, j'entra&icirc;ne aussi nos employ&eacute;s pour qu'il puissent g&eacute;rer leur propre contenu et j'assiste nos membres en anglais, fran&ccedil;ais et espagnol avec leurs questions d'adh&eacute;sion.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //FIN SERVICES -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //FIN SECTION SERVICES -->
    
    
    <!-- DÉBUT FORCES -->
    <section id="forces" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Mes Forces</h2>

                        <p class="section-subtitle">L'&Eacute;chec ne me surprendra jamais si ma d&eacute;termination &agrave; r&eacute;ussier est assez forte.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- DÉBUT CHARTE AUX COLONNES -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">MOI</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Superh&eacute;ro</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Tr&egrave;s Bon</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Bon</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>D&eacute;butant</h4>
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">92%</span>

                                        <div class="item-progress" data-percent="92">
                                            <span class="title">Cr&eacute;ativit&eacute;</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">71%</span>

                                        <div class="item-progress" data-percent="71">
                                            <span class="title">Fiabilit&eacute;e</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">82%</span>

                                        <div class="item-progress" data-percent="82">
                                            <span class="title">Communication</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">58%</span>

                                        <div class="item-progress" data-percent="58">
                                            <span class="title">Leadership</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">67%</span>

                                        <div class="item-progress" data-percent="67">
                                            <span class="title">Persuasion</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.chart -->
                        </div>
                        <!-- //FIN CHARTE AUX COLONNES -->

                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //FORCES FIN -->
    
    
    <!-- DÉBUT SECTION CV -->
    <section id="cv" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Mon Curriculum Vitae</h2>

                        <p class="section-subtitle">
                            Si vous appelez les &eacute;checs des exp&eacute;riences, vous pouvez les mettre sur votre CV en les appelant des ach&egrave;vements.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- DÉBUT ÉDUCATION -->
                <div class="row education">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            Mon &Eacute;ducation
                            <br>
                            2006 - 2010
                        </h3>

                        <div class="panel-group resume" id="education">
                            <?php 
							$requeteEducation = "SELECT school, degreetype, degreetitle, minortype, minortitle, start_date, end_date FROM education WHERE language = 'fr-CA' ORDER BY id;";
							$resultatEducation = $lien->query($requeteEducation);
							while($rang_education = $resultatEducation->fetch_assoc())
							{
								echo "<div class='resume-item'>";
                                echo "<div class='resume-year'>";
                                    echo "<span class='resume-year'>".date('Y',strtotime($rang_education['start_date']))." - ".date('Y',strtotime($rang_education['end_date']))."</span>";
                                echo "</div>";
                                echo "<!-- //.resume-year -->";

                                echo "<div class='resume-btn'>";
                                    echo "<a href='#education1' class='collapse' data-toggle='collapse' data-parent='#education'></a>";
                                echo "</div>";
                                echo "<!-- //.resume-btn -->";

                                echo "<div class='panel'>";
                                    echo "<div class='panel-heading'>";
                                        echo "<div class='panel-title'>";
                                            echo "<h4 class='resume-title'>{$rang_education['degreetype']} - {$rang_education['school']}</h4>";
                                        echo "</div>";
                                        echo "<!-- //.panel-title -->";
                                    echo "</div>";
                                    echo "<!-- //.panel-heading -->";

                                    echo "<div id='education1' class='panel-collapse collapse'>";
                                        echo "<div class='panel-body text-grey'>";
                                            echo "<p>
                                                {$rang_education['degreetype']} - {$rang_education['degreetitle']} 
												<br>
												{$rang_education['minortype']} - {$rang_education['minortitle']}
                                            </p>";
                                        echo "</div>";
                                        echo "<!-- //.panel-body -->";
                                    echo "</div>";
                                    echo "<!-- //.panel-collapse -->";
                                echo "</div>";
                                echo "<!-- //.panel -->";
                            echo "</div>";
                            echo "<!-- //.resume-item -->";
						}
							?>

                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //FIN ÉDUCATION -->
            
                <!-- DÉBUT EXPÉRIENCE PROFESSIONNELLES -->
                <div class="row work-experience">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            Exp&eacute;riences Professionnelles
                            <br>
                            2010 - Pr&eacute;sent
                        </h3>

                        <div class="panel-group resume" id="work">
                            <?php
							$i = 0; //$i va être le numéro de "work" pour les accordéons de travail
                            $a = 0; //$a va être pour la liste de déscriptions
                            $requetePositionsWeb = "SELECT company, jobtitle, start_date, end_date FROM positions WHERE language='fr-CA' AND type = 'WEB' ORDER BY start_date DESC;";
                            $resultatPositionsWeb = $lien->query($requetePositionsWeb);
                            while($rang_positionsweb = $resultatPositionsWeb->fetch_assoc())
                            {
							$i++; //Ceci ajoute 1 au numéro de "work" pour les accordéons de travail
                            $a++; //Ceci ajoute 1 pour changer la gamme de déscriptions
                            if ($a == 1) {
                                $descriptionsWeb = 'apsa';
                            } elseif ($a == 2) {
                                $descriptionsWeb = 'georgetown';
                            } else if ($a ==3) {
                                $descriptionsWeb = 'iq';
                            }
                            echo "<div class='resume-item'>";
                                echo "<div class='resume-year'>";
                                    if (is_null($rang_positionsweb['end_date'])) {
                                        echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y')."</span>";
                                    } else {
                                        echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y',strtotime($rang_positionsweb['end_date']))."</span>";
                                    }
                                echo "</div>";
                                echo "<!-- //.resume-year -->";

                                echo "<div class='resume-btn'>";
                                    echo "<a href='#work{$i}' data-toggle='collapse' data-parent='#work'></a>";
                                echo "</div>";
                                echo "<!-- //.resume-btn -->";

                                echo "<div class='panel'>";
                                    echo "<div class='panel-heading'>";
                                        echo "<div class='panel-title'>";
                                            echo "<h4 class='resume-title'>{$rang_positionsweb['jobtitle']} - {$rang_positionsweb['company']}</h4>";
                                        echo "</div>";
                                        echo "<!-- //.panel-title -->";
                                    echo "</div>";
                                    echo "<!-- //.panel-heading -->";

                                    echo "<div id='work{$i}' class='panel-collapse collapse in'>";
                                        echo "<div class='panel-body text-grey'>";
                                            echo "<p>
                                                R&eacute;sponsibilities:
                                                <br>";
                                                $requeteDesc = "SELECT job FROM descriptions WHERE language='fr-CA' AND type = 'WEB' AND company = '".$descriptionsWeb."' ORDER BY id;";
                                                $resultatDesc = $lien->query($requeteDesc);
                                                echo "<ul>";
                                                while($rang_desc = $resultatDesc->fetch_assoc())
                                                {
                                                    echo "<li>{$rang_desc['job']}</li>";
                                                }
                                                echo "</ul>";
                                            echo "</p>";
                                        echo "</div>";
                                        echo "<!-- //.panel-body -->";
                                    echo "</div>";
                                    echo "<!-- //.panel-collapse -->";
                                echo "</div>";
                                echo "<!-- //.panel -->";
                            echo "</div>";
                            echo "<!-- //.resume-item -->";                               
                            }
                            ?>
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //FIN EXPÉRIENCES PROFESSIONNELLES -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //FIN SECTION CV -->
    
    <!-- DÉBUT SECTION COMPÉTENCES -->
    <section id="competences" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Comp&eacute;tences et Connaissances</h2>

                        <p class="section-subtitle">Un gagnant est quelqu'un qui reconna&icirc;t ses talents, travail au jusqu'au bout pour qu'ils deviennent des comp&eacute;tences, et les utilise pour l'ach&egrave;vement de ses projets.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- DÉBUT CHARTE CIRCULAIRE -->
                <div class="circle-chart">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="84"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">84%</span>

                                <h4 class="text-center">HTML5 + CSS3</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">65%</span>

                                <h4 class="text-center">PHP</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">55%</span>

                                <h4 class="text-center">MySQL + MS SQL Server</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="45"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">45%</span>

                                <h4 class="text-center">Photoshop</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">65%</span>

                                <h4 class="text-center">Premi&egrave;re</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item last">
                                <div class="circle">
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">55%</span>

                                <h4 class="text-center">After Effects</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //FIN CHARTE CIRCULAIRE -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //FIN SECTION COMPÉTENCES -->
    
    
    <!-- DÉBUT SECTION CONNAISSANCES -->
    <section id="knowledge" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Connaissance</h2>

                        <p class="section-subtitle">Le comportement humain coule depuis trois sources principales: d&eacute;sir, &eacute;motion, et connaissance.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- DÉBUT CHARTE DE BARRE -->
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4>Marketing</h4>

                                <div class="bar">
                                    <span class="percent">45%</span>
                                    <span class="item-progress" data-percent="45"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>D&eacute;veloppement Web</h4>

                                <div class="bar">
                                    <span class="percent">95%</span>
                                    <span class="item-progress" data-percent="95"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Conc&eacute;ption Digitale</h4>

                                <div class="bar">
                                    <span class="percent">80%</span>
                                    <span class="item-progress" data-percent="80"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4>Gestion de Donn&eacute;es</h4>

                                <div class="bar">
                                    <span class="percent">65%</span>
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>R&eacute;daction et Traduction</h4>

                                <div class="bar">
                                    <span class="percent">95%</span>
                                    <span class="item-progress" data-percent="95"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Montage Cin&eacute;matographique</h4>

                                <div class="bar">
                                    <span class="percent">87%</span>
                                    <span class="item-progress" data-percent="87"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->
                </div>
                <!-- //FIN CHARTE DE BARRE -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
        
    </section>
    <!-- //FIN SECTION CONNAISSANCES -->    
    
    <!-- DÉBUT SECTION CONTACT -->
    <section id="contact" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Contactez-Moi</h2>

                        <p class="section-subtitle">
                            Avez-vous un projet que vous aimeriez discuter?
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- DÉBUT DÉTAILS CONTACT -->
                        <div class="contact-details text-center">
                            <div class="speech-bubble">
                                <i class="icon-Speach-Bubble11"></i>

                                <h4 style="font-size:24px;" class="text-grey">
                                    Dites<br>Bonjour
                                </h4>
                            </div>
                            <!-- //.speech-bubble -->

                            <h2>Grant <strong>Muka&iuml;</strong></h2>

                            <h4 class="text-grey">hello@grantmukai.com</h4>

                            <span class="divider center"></span>
                        </div>
                        <!-- //FIN DÉTAILS CONTACT -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //FIN SECTION CONTACT -->
    
    
    <!-- DÉBUT EN-PIED -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-scroll">
                        <a href="#page-top"><i class="icon-Arrow-Up"></i></a>
                    </div>
                    <!-- //.page-scroll -->
                    
                    <ul class="list-inline social-icons">
                        <li>
                            <div class="item">
                                <a href="http://www.twitter.com/grantmukai" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="http://www.linkedin.com/in/grantmukai" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="http://www.github.com/grantmukai" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="http://www.youtube.com/manto51" target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>
                    </ul>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p class="text-grey">&copy; <?php echo date('Y'); ?> Grant Muka&iuml;. Tous droits r&eacute;serv&eacute;s.</p>
                        <?php if (isset($imageVille)) {
                    echo "<p class='text-grey'>Cr&eacute;dit de la photo principale: <em>".$creditsImages[$quelleVille][1]."</em> (".$creditsImages[$quelleVille][2].") par <a href='http://www.flickr.com/photos/".$creditsImages[$quelleVille][4]."'>".$creditsImages[$quelleVille][3]."</a>. Cette photo ne porte aucune modification.</p>";
                    }
                    ?>
                    </div>
                    <!-- //.copyright -->
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </footer>
    <!-- //FIN EN-PIED -->
    
>>>>>>> parent of 154d560... sections
    
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