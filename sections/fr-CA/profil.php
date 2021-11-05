<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukaï" class="img-responsive"/>
                        <h4 class="title">Grant Kiyoshi Mukaï</h4>
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
                                    Je m'appelle Grant Kiyoshi Mukaï et je suis le producteur et gérant de contenu Web à la <a href='https://www.aps.org/'>Société américaine de physique</a> au Maryland aux États-Unis.
                                </p>

                                    <span class="divider"></span>

                                <p class="text-grey">
                                    Je suis responsable des propositions des designs, de la direction et de la stratégie des sites gérés par la société. Je travaille étroitement avec notre équipe de marketing afin de réaliser la promotion de leurs événements sur les plateformes numériques et je planifie l'organisation du contenu sur le site principal de la société et les sites de physique de ses clients.

                                </p>

                                <p class="text-grey">
                                    Avant de me rejoindre à ma société actuelle, je travaillais pour <a href="https://www.projecthope.org">Project HOPE</a> où je gérais la statégie du contenu de notre site principal qui incluait l'augementation de notre recherche organique et le suivi des analytiques du site et le comportement de nos visiteurs.
                                </p>

                                <p class="text-grey">
                                    J'ai aussi obtenu mes expériences numériques à <a href="https://www.apsanet.org">l'Association américaine de science politique</a> où j'aidais mes coéquipiers à gérer le site public de l'association ainsi que plusieurs sites WordPress consacrés à la promotion de la science politique et qui aidaient nos sections d'intérêts spécialisés à s'organiser aux réseaux. J'étais aussi responsable de la gestion des bases de données, de l'analyse statistique et la génération des tableaux de données tout en fournissant de l'excellent service à la clientèle en anglais, français et espagnol.
                                </p>
								
                                <p class="text-grey">
                                    Je suis détenteur d'un Baccalauréat en sciences en journalisme télévisé de <a href='https://www.bu.edu/com'>l'École de communication</a> à l'Université de Boston avec une mineure en langue et littérature françaises.
                                </p>
								
                                <p class="text-grey">
                                    Pendant mon temps libre, je suis danseur de Lindy Hop, Blues et Zouk Brésilien - trois styles de danse sociale assez populaires partout au Canada et surtout à Montréal, la capitale de danse au pays, et la Capitale-Nationale, une des scènes les plus fortes au Québec.
                                </p>
								
                                <p class="text-grey">
                                    Cordialement,
                                </p>
								
								<img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Signature de Grant Mukaï' class="signature" />
								
                                <p class="text-grey">
                                    Kiyoshi Mukaï
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
                                    <li>Grant Kiyoshi Mukaï</li>
                                    <li>Washington, District de Columbia, É.-U.</li>
                                    <li>202-656-8317</li>
                                    <li>bonjour@kiyoshimukai.com</li>
                                    <li>www.kiyoshimukai.com/quebec</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Télécharger CV Web";
								$boutonTelechargerCom = "Télécharger CV Communications";
								$cvMiseajour = "Indisponible";
                                $IdTelechargerWebDoc = "webdoccvfrca";
                                $IdTelechargerWebPdf = "webpdfcvfrca";
                                $IdTelechargerComDoc = "comdoccvfrca";
                                $IdTelechargerComPdf = "compdfcvfrca";
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
