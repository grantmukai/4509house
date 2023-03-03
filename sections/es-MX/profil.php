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
                                <img src="/assets/images/drapeaux/mx.png" alt="Bandera de México" class="drapeaux" />

                                <br />

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Kiyoshi Mukai.</h2>

                                <p>
                                    Mi nombre es Kiyoshi Mukai y soy un Coordinador marketing digital para <a href="https://www.toctoccommunications.com">Toc Toc Comunicaciones</a> en Canadá.
                                </p>

                                <span class="divider"></span>

                                <p>Antes de tomar ese empleo, estaba trabajando para la <a href="https://www.aps.org">Sociedad estadounidense de física</a> en los Estados Unidos.</p>

                                <p>En la Sociedad de física, era mi responsabilidad de actualizar el contenido en los sitios Web tomando en cuenta el comportamiento de los usuarios para mejorar la organización de la información. Estaba creando también el diseño y la estructura después de analizar el contenido existente y hacer proposiciones de como connectarnos con nuestra audiencia en una mejora manera.</p>

                                <p>También gestioné la transición de nuestro sitio Web y estaba escribiendo comunicados de prensa y artículos para mostrar las programas en el mundo. Era responsable de la conceptualización de la estrategia Web para mejorar la usabilidad del sitio y aumentar el busco orgánico.</a>

                                <p>Obtuve mi licenciatura en periodismo televisivo después de cuatro años de estudios en la <a href='https://www.bu.edu/com'>Facultad de comunicación</a> de la Universidad de Boston con una especialización en lengua y literatura francesas.</p>

                                <p>En mi tiempo libre, el baile cobre una gran importancia en mi vida. El tipo de baile que estoy practicando es el Zouk Brasileño. Me gusta también la comunidad internacional de Montreal porque me da la opportunidad de practicar mi español.</p>
								
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
                                    <li>Ciudad de México, DF</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                            <?php
							$boutonTelechargerWeb = "Descargar CV Web";
							$boutonTelechargerCom = "Descargar CV Communications";
							$cvMiseajour = "Indisponible";
                            $IdTelechargerWebDoc = "webdoccvesmx";
                            $IdTelechargerWebPdf = "webpdfcvesmx";
                            $IdTelechargerComDoc = "comdoccvesmx";
                            $IdTelechargerComPdf = "compdfcvesmx";
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