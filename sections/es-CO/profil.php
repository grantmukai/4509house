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
                                <img src="/assets/images/drapeaux/co.png" alt="Bandera de Colombia" class="drapeaux" />

                                <br />

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Kiyoshi Mukai</h2>

                                <p>
                                    Mi nombre es Kiyoshi Mukai y soy el Cordinador marketing digital para <a href='https://www.toctoccommunications.com'>Toc Toc Comunicaciones</a> en Québec.
                                </p>

                                <span class="divider"></span>

                                <p>Antes de unirme a la Agencia, trabajé para la <a href="https://www.aps.org">Sociedad física estadounidense</a> en los Estados Unidos.
                                
                                <p>Trabajé también para <a href="https://www.projecthop.org">Project HOPE</a> dónde ayudaba la organización en ayuda humanitaria con el lanzamiento de su sitio Web y estrategia de contenidos. Pasaba mucho tiempo promocionando nuestros esfuerzos con migrantes venezolanos en Cúcuta, Norte de Sandander.</p>

                                <p>Obtuve mi diploma universitario en periodismo televisivo después de cuatro años de estudios en la <a href='https://www.bu.edu/com'>Facultad de comunicación</a> de la Universidad de Boston con una especialización en lengua y literatura francesa.</p>

                                <p>En mi tiempo libre, el Zouk Brasileño cobre una gran importancia en mi vida. Me gusta también la comunidad internacional de Montréal porque me da la opportunidad de practicar mi español.</p>
								
                                <p class="text-grey">
                                    Cordialemente,
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
                                <h4>Detalles de contacto</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Kiyoshi Mukai</li>
                                    <li>Bogotá, Cundinamarca/li>
                                    <li>hola@kiyoshimukai.com</li>
                                    <li>www.kiyoshimukai.com/colombia</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                            <?php
							$boutonTelechargerWeb = "Descargar CV Web";
							$boutonTelechargerCom = "Descargar CV Comunicaciones";
							$cvMiseajour = "Indisponible";
                            $IdTelechargerWebDoc = "webdoccvesco";
                            $IdTelechargerWebPdf = "webpdfcvesco";
                            $IdTelechargerComDoc = "comdoccvesco";
                            $IdTelechargerComPdf = "compdfcvesco";
							/*$nomFamille = "Perez";*/
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