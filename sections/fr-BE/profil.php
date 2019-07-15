<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi MUKAÏ" class="img-responsive"/>
                        
                        <h4 class="title">Kiyoshi MUKAÏ</h4>
                        
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                                <div class="btn-group">
  <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Choisissez Votre Pays
  <span class="caret"></span></button>
<?php require "pays.php"; ?>
</div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Loi européenne sur les témoins de connexion (cookies) : Ce site emploi des témoins de connexions (cookies) pour se souvenir que vous préférez la version belge de ce site. En visitant mon site, vous acceptez que les témoins de connexion (cookies) aillent être stockés sur votre ordinateur. Aucune information personnelle n'est rapportée. Pour toute question concernant l'usage des témoins de connexion (cookies), veuillez <a href='#contact'>me contacter</a>.</p>

                                <img src="/assets/images/drapeaux/be.png" alt="Drapeau de la Belgique" class="drapeaux" />

                                <img src="/assets/images/drapeaux/eu.png" alt="Drapeau de l'Union Européene" style="margin-left:5px" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Bonjour, je m'appelle Kiyoshi MUKAÏ<br />Hallo, mijn naam is Grant Mukai</h2>

                                <p>
                                    Je m'appelle Grant Kiyoshi MUKAÏ et je suis le gérant principal des communications numériques à <a href='http://www.projecthope.org/'>Project HOPE</a> aux États-Unis d'Amérique.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                Avant de me joindre à Project HOPE, j'ai travaillé pour l'Association américaine de science politique où j'aidais mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aidaient les sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>

                                <p class="text-grey">
                                    J'ai aussi travaillé à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington et <a href='http://www.iqsolutions.com'>iQ Solutions</a> en banlieue en développant des e-mails de marketing. Quelques clients de santé pour lesquels j'ai travaillé ont compris l'Administration pour abus des stupéfiants et services santé mentale et les Instituts nationaux de santé &mdash; deux agences gouvernementales américaines. J'ai aussi réalisé et mis à jour des pages Web en anglais et en espagnol pour les Instituts nationaux de l'arthrite, affections musculo-squelettiques et maladies de la peau.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un bachelier (diplôme de quatre ans) en journalisme télévisé de <a href='http://www.bu.edu/com'>l'École de communication</a> à l'Université de Boston avec une spécialisation en langue et littérature françaises.
                                </p>
								
                                <p class="text-grey">
                                    Je passe mon temps libre dans les studios de danse en dansant le Blues, le Lindy Hop et le Zouk Brasilien - trois styles de danse qui sont populaires en Amérique du Nord, maintenant rendus aussi populaires à Bruxelles avec BRUX <em lang="en-CA">(The Brussels Lindy Exchange)</em>. J'aime aussi faire de nouvelles rencontres lors des événements culturels aux États-Unis.
                                </p>
								
                                <p class="text-grey">
                                    Veuillez recevoir l'assurance de mes sentiments les meilleurs,
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
                                    <li>Washington, District de Columbia, É.-U.</li>
                                    <li>+001 202 656 8317</li>
                                    <li>bonjour@grantmukai.com</li>
                                    <li>www.grantmukai.com/belgique</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Indisponible";
                                $IdTelechargerWebDoc = "webdoccvfrbe";
                                $IdTelechargerWebPdf = "webpdfcvfrbe";
                                $IdTelechargerComDoc = "comdoccvfrbe";
                                $IdTelechargerComPdf = "compdfcvfrbe";
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
