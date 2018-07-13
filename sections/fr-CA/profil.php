<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukaï" class="img-responsive"/>
                        <h4 class="title">Grant Mukaï</h4>
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

			<h2 style="clear:both;" class="section-title">Bonjour, mon nom est Grant Kiyoshi Mukaï</h2>

                                <p>
                                    Je m'appelle Grant Mukaï et je suis le Gérant principal des communications numériques à <a href='http://www.projecthope.org/'>Project HOPE</a> au Maryland aux États-Unis.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Je suis responsable de la transition de notre site Web ainsi que la gestion de nos communications électroniques telles que les communiqués de presse et la publication des articles en ligne.
                                </p>

                                <p class="text-grey">
                                    Avant de me rejoindre à Project HOPE, je travaillais pour <a href="http://www.apsanet.org">l'Association américaine de science politique</a> où j'aidais mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique et qui aidaient nos sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>

                                <p class="text-grey">
                                    J'ai aussi travaillé à <a href='http://msb.georgetown.edu'>l'École McDonough de commerce</a> à l'Université Georgetown à Washington et <a href='http://www.iqsolutions.com'>iQ Solutions</a> à Rockville, Maryland, en développant des courriels de marketing. Quelques clients de santé pour lesquels j'ai travaillé ont compris l'Administration pour abus des stupéfiants et services santé mentale <em>(SAMHSA en anglais)</em> et les Instituts nationaux de la santé <em>(NIH en anglais)</em>. J'ai aussi rédigé et mis à jour des pages Web en anglais et en espagnol pour les Instituts nationaux de l'arthrite, affections musculo-squelettiques et maladies de la peau <em>(NIAMS en anglais)</em>.
                                </p>
								
                                <p class="text-grey">
                                    J'ai obtenu un Baccalauréat en sciences en journalisme télévisé à <a href='http://www.bu.edu/com'>l'École de communications</a> à l'Université de Boston avec une mineure en langue et littérature française.
                                </p>
								
                                <p class="text-grey">
                                    Pendant mon temps libre, je suis danseur de Lindy Hop et Blues - deux styles de danse sociale assez populaires partout au Canada et surtout à Montréal, la capitale de danse au pays.
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
                                    <li>438-228-0753</li>
                                    <li>bonjour@grantmukai.com</li>
                                    <li>www.grantmukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Indisponible";
                                /*$nomFamille = "Turcotte";*/
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
