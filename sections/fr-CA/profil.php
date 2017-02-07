<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukaï" class="img-responsive"/>
                        
                        <h4 class="title">Développeur Web</h4>
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
                                <img src="/assets/images/drapeaux/qc.png" alt="Drapeau du Québec" class="drapeax" />

                                <img src="/assets/images/drapeaux/ca.png" alt="Drapeau du Canada" class="drapeaux" style="margin-left:5px;" />

                                <br /> 

			<h2 style="clear:both;" class="section-title">Bonjour, mon nom est Grant Mukaï</h2>

                                <p>
                                    Je m'appelle Grant Mukaï et je suis Développeur Web et spécialiste en services et systèmes à <a href='http://www.apsanet.org/'>l'Association américaine de science politique</a> (APSA) au District de Columbia.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Je travaille dans le Département de marketing et communications où j'aide mes coéquipiers à gérer le site publique de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique et qui aident nos sections d'intérêts spéciaux à s'organiser aux réseaux. Je suis aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol. Bien que nos bureaux se trouvent aux États-Unis, nous avons des membres provenant des quatre coins du monde.
                                </p>

                                <p class="text-grey">
                                    Avant de me rejoindre à l'APSA, j'ai travaillé à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington et <a href='http://www.iqsolutions.com'>iQ Solutions</a> à Rockville, Maryland, en développant des bulletins électroniques. Quelques clients de santé pour lesquels j'ai travaillé ont compris l'Administration pour abus des stupéfiants et services santé mentale <em>(SAMHSA en anglais)</em> et les Instituts nationaux de la santé <em>(NIH en anglais)</em>. J'ai aussi rédigé et mit à jour des pages Web en anglais et en espagnol pour les Instituts nationaux de l'arthrite, affections musculo-squelettiques et maladies de la peau <em>(NIAMS en anglais)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Une grande partie de mes responsabilités a inclut la vérification des pages Web et documents PDF afin d'assurer la conformité aux normes établies par le W3C <em>(World Wide Web Consortium)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Avant mon changement de carrière du journalisme au développement Web et Communications, j'étais réalisateur adjoint d'actualité chez <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> dans le village de Wellesley, Massachusetts, où je produisais des court métrages et documentaires pour une chaîne de télévision. Dans la métropole de Boston, j'ai apporté du contenu vidéo au plateforme Patch.com.
                                </p>
								
                                <p class="text-grey">
                                    J'ai obtenu un Baccalauréat en sciences en journalisme télévisé à <a href='http://www.bu.edu/com'>l'École de communications</a> à l'Université de Boston avec une mineure en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Pendant mon temps libre, je suis danseur de Lindy Hop et Blues, deux styles de danse sociale assez populaires partout au Canada et surtout à Montréal, la capitale de danse au pays. Je suis à Montréal plusieurs fois par année pour y participer. Je suis aussi très actif dans la scène internationale à Washington et je suis en train d'améliorer mes compétences en espagnol afin de pouvoir voyager au Mexique.
                                </p>
								
                                <p class="text-grey">
                                    Cordialement,
                                </p>
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Signature de Grant Mukaï' class="signature" />
								
                                <p class="text-grey">
                                    Grant Mukaï
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
                                    <li>Grant Mukaï</li>
                                    <li>Washington, District de Columbia, É.-U.</li>
                                    <li>202-656-8317</li>
                                    <li>bonjour@grantmukai.com</li>
                                    <li>www.grantmukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Mise à jour...";
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
