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
                        <div class="btn-group" style="margin-bottom:10px;">
                            <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Choisissez Votre Pays
                            <span class="caret"></span></button>
                            <?php require "pays.php"; ?>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <p>Loi européenne sur la vie privée : Ce site emploi des cookies pour se souvenir que vous préférez la version française de ce site. En visitant mon site, vous acceptez que les cookies aillent être stockés sur votre ordinateur. Aucune information personnelle n'est rapportée. Pour toute question concernant l'usage des cookies, veuillez <a href='#contact'>me contacter</a>.</p>

                                <img src="/assets/images/drapeaux/fr.png" alt="Drapeau de la France" class="drapeaux" />

                                <img src="/assets/images/drapeaux/eu.png" alt="Drapeau de l'Union Européenne" style="margin-left:5px;" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Bonjour, je m'appelle Kiyoshi MUKAÏ</h2>

                                <p>
                                    Je m'appelle Kiyoshi MUKAÏ et je suis un Coordonnateur marketing numérique chez <a href='https://www.toctoccommunications.com/'>Toc Toc Communications</a> au Québec.

                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Avant de me joindre à la Toc Toc Communications, je travaillais à <a href="https://www.aps.org">la Société américaine de physique</a> et <a href="https://www.projecthope.org">Project HOPE</a> où j'ai dirigé la transition de notre infrastructure Web et j'ai géré nos chaînes sur les réseaux sociaux. J'ai aussi rédigé et révisé des articles de blogues et j'ai cherché activement des développements dans le monde par rapport à la santé mondiale.
                                </p>

                                <p class="text-grey">
                                    J'ai gagné d'autres expériences professionelles en travaillant à <a href="https://www.apsanet.org">l'Association américaine de science politique</a> où j'ai aidé mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aidaient nos sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un BAC + 4 (diplôme de premier cycle) en journalisme télévisé à <a href='https://www.bu.edu/com'>la Faculté de communication</a> à l'Université de Boston avec une spécialisation en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Je passe mon temps libre dans les salles de bal en dansant le Blues, le Lindy Hop et le Zouk brésilien - trois styles de danse qui sont populaires en Amérique du Nord, maintenant rendus aussi populaires dans certaines villes françaises telles que Paris et Toulouse.
                                </p>
								
                                <p class="text-grey">
                                    Je vous prie d'agréer mes salutations distinguées,
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
                                <h4>Coordonnées</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Kiyoshi MUKAÏ</li>
                                    <li>Montréal, Québec, Canada</li>
                                    <li>www.kiyoshimukai.ca/france</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
                                    $boutonTelechargerWeb = "Télécharger CV Communications Numériques";
                                    $boutonTelechargerCom = "Télécharger CV Relations Publiques";
                                    $cvMiseajour = "Indisponible";
                                    $IdTelechargerWebDoc = "webdoccvfrfr";
                                    $IdTelechargerWebPdf = "webpdfcvfrfr";
                                    $IdTelechargerComDoc = "comdoccvfrfr";
                                    $IdTelechargerComPdf = "compdfcvfrfr";
									/*$nomFamille = "Martin";*/
									include 'profil_base.php';
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
