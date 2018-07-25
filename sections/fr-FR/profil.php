<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant MUKAÏ" class="img-responsive"/>
                        
                        <h4 class="title">Grant Kiyoshi MUKAÏ</h4>
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
                                <p>Loi Européenne sur la vie privée : Ce site emploi des cookies pour se souvenir que vous préférez la version française de ce site. En visitant mon site, vous acceptez que les cookies vont être stockés sur votre ordinateur. Aucune information personelle n'est rapportée. Pour toute question concernant l'usage des cookies, veuillez <a href='#contact'>me contacter</a>.</p>

                                <img src="/assets/images/drapeaux/fr.png" alt="Drapeau de la France" class="drapeaux" />

                                <img src="/assets/images/drapeaux/eu.png" alt="Drapeau de l'Union Européenne" style="margin-left:5px;" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Bonjour, je m'appelle Grant Kiyoshi MUKAÏ</h2>

                                <p>
                                    Je m'appelle Grant Kiyoshi MUKAÏ et je suis le Gérant principal des communications numériques pour <a href='http://www.projecthope.org/'>Project HOPE</a> aux États-Unis d'Amérique.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Je travaille à Project HOPE où je surveille la transition de notre infrastructure Web et gère nos chaînes sur les réseaux sociaux. Je rédige et révise aussi des articles de blogs et je cherche activement des développements dans le monde par rapport à la santé mondiale.
                                </p>

                                <p class="text-grey">
                                    Avant de me joindre à Project HOPE, j'ai travaillé à l'Association américaine de science politique où j'ai aidé mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique qui aidaient nos sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données SQL, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>

                                <p class="text-grey">
                                    J'ai travaillé aussi à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington et <a href='http://www.iqsolutions.com'>iQ Solutions</a> en banlieue en développant des e-mails de marketing. Quelques clients de santé pour lesquels j'ai travaillé ont compris l'Administration pour abus des stupéfiants et services santé mentale et les Instituts nationaux de la santé &mdash; des agences gouvernementales américaines. J'ai aussi réalisé et mis à jour des pages Web en anglais et en espagnol pour les Instituts nationaux de l'arthrite, affections musculo-squelettiques et maladies de la peau.
                                </p>
								
                                <p class="text-grey">
                                    Avant mon changement de carrière du journalisme aux communications numériques et relations publiques, j'étais réalisateur adjoint d'actualité chez <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> dans le nord-est du pays, où je produisais des court métrages et documentaires pour une chaîne de télévision.
                                </p>
								
                                <p class="text-grey">
                                    Je détiens un BAC+4 (diplôme de premier cycle) en journalisme télévisé à <a href='http://www.bu.edu/com'>l'École de communications</a> à l'Université de Boston avec une spécialisation en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Je passe mon temps libre dans les salles de bal en dansant le Blues et le Lindy Hop, deux styles de danse qui sont populaires en Amérique du Nord, maintenant rendus aussi populaires dans certaines villes françaises telles que Paris et Toulouse.
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
                                    $boutonTelechargerWeb = "Télécharger CV Communication Numériques";
                                    $boutonTelechargerCom = "Télécharger CV Relations Publiques";
                                    $cvMiseajour = "Indisponible";
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
