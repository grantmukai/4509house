<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukaï" class="img-responsive"/>
                        <h4 class="title">Kiyoshi MUKAÏ</h4>
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

                                <h2 style="clear:both;" class="section-title">Bonjour ! Je m'appelle Kiyoshi MUKAÏ<br /><small>Guten Tag, Buongiorno, Allegra</small></h2>

                                <p>
                                    Je m'appelle Kiyoshi MUKAÏ et je suis le Producteur et responsable de contenu Web à la <a href='https://www.aps.org/'>Société américaine de physique</a> aux États-Unis d'Amérique. Je m'occupe de la stratégie Web et l'expérience d'internaute pour plusieurs sites de physique.

                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Avant de me rejoindre à ma société actuelle, je travaillais pour Project HOPE, une organisation à but non-lucratif qui fournit de l'aide humanitaire partout au monde. J'ai aussi travaillé à <a href="https://www.apsanet.org">l'Association américaine de science politique</a> où j'ai aidé mes collègues à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aidaient les sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un diplôme de premier cycle en journalisme télévisé à <a href='https://www.bu.edu/com'>la Faculté de communication</a> à l'Université de Boston avec une spécialisation en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Dans mon temps libre, je danse le Lindy Hop, le Blues et le Zouk Brésilien - trois styles de danse très populaires en Amérique du Nord.
                                </p>
								
                                <p class="text-grey">
                                    Bien à vous,
                                </p>
								
								<img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Signature de Kiyoshi MUKAÏ' class="signature" />
								
                                <p class="text-grey">
                                    Kiyoshi MUKAÏ
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
                                    <li>Kiyoshi MUKAÏ</li>
                                    <li>Montréal, Québec, Canada</li>
                                    <li>bonjour@kiyoshimukai.com</li>
                                    <li>www.kiyoshimukai.com/suisse</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php 
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Indisponible";
                                $IdTelechargerWebDoc = "webdoccvfrch";
                                $IdTelechargerWebPdf = "webpdfcvfrch";
                                $IdTelechargerComDoc = "comdoccvfrch";
                                $IdTelechargerComPdf = "compdfcvfrch";
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