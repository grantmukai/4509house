<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Kiyoshi Mukai</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                        <div class="btn-group">
                                  <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Elige Su País
                                  <span class="caret"></span></button>
                                <?php require "pays.php"; ?>
                                </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/pr.png" alt="Bandera de Puerto Rico" class="drapeaux" />

                                <img src="/assets/images/drapeaux/us.png" alt="Bandera de los Estados Unidos" style="margin-left:5px;" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hola, mi nombre es Kiyoshi Mukai</h2>

                                <p>
                                    Mi nombre es Kiyoshi Mukai y soy un Coordenador marketing digital para <a href="https://www.toctoccommunications.com">Toc Toc Comunicaciones</a> en Montréal, Québec, Canadá.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    En los Estados Unidos, fui el Productor y gerente de contenidos Web para la <a href='https://www.aps.org'>Sociedad estadounidense de f&iacute;sica</a> en Maryland. Es esta posición, fue mi responsibilidad de conceptualizar la estrategia de contenidos para los sitios bajo la sociedad.</p>

                                <p class="text-grey">
                                    Antes de unirme a APS, estaba trabajando para <a href="https://www.projecthope.org">Project HOPE</a> gestionando el contenido estrat&eacute;gico y apoyando los esfuerzos de colectos de fondos.
                                </p>
								
                                <p class="text-grey">
                                    Obtuve mi bacherillato en periodismo televisivo en la <a href='https://www.bu.edu/com'>Facultad de comunicaci&oacute;n</a> de la Universidad de Boston con un menor en lengua y literatura francesas.
                                </p>
								
                                <p class="text-grey">
                                    En mi tiempo libre, me gusta mucho el baile Zouk Bresileño y me interesan las otras culturas internacionales de Montréal.
                                </p>
								
                                <p class="text-grey">
                                    Cordialmente,
                                </p>
								
								<img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Firma de Kiyoshi Mukai' class="signature" />
								
                                <p class="text-grey">
                                    Kiyoshi Mukai
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
                                <h4>Contacto</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Kiyoshi Mukai</li>
                                    <li>Washington, Distrito de Columbia</li>
                                    <li>202-656-8317</li>
                                    <li>www.kiyoshimukai.com/puertorico</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Descargar CV Web";
								$boutonTelechargerCom = "Descargar CV Comunicacioness";
								$cvMiseajour = "Indisponible";
                                $IdTelechargerWebDoc = "webdoccvespr";
                                $IdTelechargerWebPdf = "webpdfcvespr";
                                $IdTelechargerComDoc = "comdoccvespr";
                                $IdTelechargerComPdf = "compdfcvespr";
				    			$nomFamille = "McKay";
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
