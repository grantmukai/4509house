<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukaï" class="img-responsive"/>
                        <h4 class="title">Grant MUKAÏ</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                <div class="col-md-8 match-height">
                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                        <div class="btn-group" style="margin-bottom:10px;">
                            <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Choisissez Votre Pays
                            <span class="caret"></span></button>
                            <?php require "pays.php"; ?>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/ch.png" alt="Drapeau de la Suisse" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Bonjour ! Je m'appelle Grant Kiyoshi MUKAÏ<br /><small>Guten Tag, Buongiorno, Allegra</small></h2>

                                <p>
                                    Je m'appelle Grant Kiyoshi MUKAÏ et je suis le gérant principal des communications numériques à <a href='http://www.projecthope.org/'>Project HOPE</a> aux États-Unis d'Amérique.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Avant de me rejoindre à Project HOPE, j'ai travaillé à l'Association américaine de science politique où j'ai aidé mes collègues à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aidaient les sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>

                                <p class="text-grey">
                                    J'ai aussi travaillé à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington (mi-atlantique) et à <a href='http://www.iqsolutions.com'>iQ Solutions</a> en banlieu en développant des e-mails de marketing.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un diplôme de premier cycle en journalisme télévisé à <a href='http://www.bu.edu/com'>l'École de communication</a> à l'Université de Boston avec une spécialisation en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Dans mon temps libre, je danse le Lindy Hop, le Blues et le Zouk Brésilien - trois styles de danse très populaires en Amérique du Nord.
                                </p>
								
                                <p class="text-grey">
                                    Bien à vous,
                                </p>
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Signature de Grant MUKAÏ' class="signature" />
								
                                <p class="text-grey">
                                    Grant MUKAÏ
                                </p>
								
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //FIN TEXTE PROFIL -->

                    <!-- DÉBUT COORDONNÉES -->
                    <div class="contact-details padding-left-yes">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <h4>Contact</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Grant MUKAÏ</li>
                                    <li>Washington, District de Columbia, États-Unis</li>
                                    <li>+001 202 656 8317</li>
                                    <li>bonjour@grantmukai.com</li>
                                    <li>www.grantmukai.com/suisse</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php 
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Indisponible";
								/*$nomFamille = "Martin";*/
								include "profil_base.php";
								?>
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //FIN COORDONNÉES -->
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //FIN SECTION PROFIL -->