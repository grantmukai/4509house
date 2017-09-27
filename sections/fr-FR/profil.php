<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant MARTIN" class="img-responsive"/>
                        
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
                                <p>Loi Européenne sur les Cookies : Ce site emploi des cookies pour se souvenir que vous préférez la version française de ce site. En visitant mon site, vous acceptez que les cookies vont être stockés sur votre ordinateur. Aucune information personelle n'est rapportée. Pour toute question concernant l'usage des cookies, veuillez <a href='#contact'>me contacter</a>.</p>

                                <img src="/assets/images/drapeaux/fr.png" alt="Drapeau de la France" class="drapeaux" />

                                <img src="/assets/images/drapeaux/eu.png" alt="Drapeau de la Union Européenne" style="margin-left:5px;" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Bonjour, je m'appelle Grant MUKAÏ</h2>

                                <p>
                                    Je m'appelle Grant MUKAÏ et je suis Développeur Web et spécialiste en services et systèmes à <a href='http://www.apsanet.org/'>l'Association américaine de science politique</a> aux États-Unis d'Amérique.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Je travaille dans le Département de marketing et communications où j'aide mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aident nos sections d'intérêts spécialisés à s'organiser aux réseaux. Je suis aussi responsable de la gestion des bases de données SQL, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol. Bien que nos bureaux se situent aux États-Unis, nous avons des membres venant des quatre coins du monde.
                                </p>

                                <p class="text-grey">
                                    Avant de me joindre à mon association, j'ai travaillé à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington et <a href='http://www.iqsolutions.com'>iQ Solutions</a> aux banlieue en développant des e-mails de marketing. Quelques clients de santé pour lesquels j'ai travaillé ont compris l'Administration pour abus des stupéfiants et services santé mentale et les Instituts nationaux de la santé &mdash; des agences gouvernementales américaines. J'ai aussi réalisé et mis à jour des pages Web en anglais et en espagnol pour les Instituts nationaux de l'arthrite, affections musculo-squelettiques et maladies de la peau.
                                </p>
								
                                <p class="text-grey">
                                    Une grande partie de mes responsabilités a inclut la vérification des pages Web et documents PDF afin d'assurer la conformité aux normes établies par le W3C <em>(World Wide Web Consortium)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Avant mon changement de carrière du journalisme au développement Web et gestion des données, j'étais réalisateur adjoint d'actualité chez <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> dans le nord-est du pays, où je produisais des court métrages et documentaires pour une chaîne de télévision.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un BAC+4 (diplôme de premier cycle) en journalisme télévisé à <a href='http://www.bu.edu/com'>l'École de communications</a> à l'Université de Boston avec une spécialisation en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Je passe mon temps libre dans les salles de bal en dansant le Blues, le Zouk et le Lindy Hop, trois styles de danse qui sont populaires en Amérique du Nord, maintenant rendus aussi populaires dans certaines villes françaises telles que Paris et Toulouse.
                                </p>
								
                                <p class="text-grey">
                                    Je vous prie d'agréer mes salutations distinguées,
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
                                <h4>Coordonnées</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Grant MUKAÏ</li>
                                    <li>Washington, District de Columbia, É.-U.</li>
                                    <li>+001.202.656.8317</li>
                                    <li>bonjour@grantmukai.com</li>
                                    <li>www.grantmukai.com/france</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
                                    $boutonTelechargerWeb = "Télécharger CV Web";
                                    $boutonTelechargerCom = "Télécharger CV Communications";
                                    $cvMiseajour = "Indisponible";
									/* Le racisme est bien présent en France */
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
