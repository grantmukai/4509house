<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Grant Mukai</h4>
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

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Grant Mukai</h2>

                                <p>
                                    Me llamo Grant Mukai y soy un Desarrollador Web y Especialista de servicios y sistemas Web a la <a href='http://www.apsanet.org'>Asociación estadounidense de ciencia política</a> en el Distrito de Columbia, Estados Unidos de América.
                                </p>

                                <span class="divider"></span>

                                <p>Estoy trabajando en el Departamento de marketing y comunicaciones dónde ayudo a mis colegios a gestionar el sitio público de la asociación y varios sitios WordPress destinados a promover la ciencia política y ayudar a nuestras secciones de intereses especializadas a organizarse en las redes. Asimismo, soy responsable de la gestión de bases de datos, analíticas estadísticas y la generación de formas de datos. Hago estas tareas proporcionando el servicio excelente al cliente en inglés, francés e español. Aunque nuestras oficinas se encuentran en los Estados Unidos, tenemos miembros que vengan de todo el mundo.</p>

                                <p>Antes de unirme a la mi asociación, trabajé a la <a href='http://www.msb.edu'>Escuela McDonough de negocios</a> de la Universidad Georgetown en la ciudad capital de mi país y <a href='http://www.iqsolutions.com'>iQ Solutions</a> en Maryland, el estado vecino, desarrollando boletines electrónicos. Algunos clientes de salud para quiénes estaba trabajando incluyeron la Administración de Salud Mental y Abuso de Sustancias de E.E.U.U. y los Institutos Nacionales de la Salud. Asimismo, creé y actualicé paginas Web en inglés y en español para el Instituto Nacional de Artritis y Enfermedades Musculoesqueléticas y de la Piel.</p>

                                <p>Antes de mi cambio de carrero de periodismo al desarrollo Web y gestión de datos, fue productor asociado de noticias al <i lang='en-US'><a href='http://www.wellesleymedia.org'>Wellesley Public Media</a></i> en el pueblo de Wellesley, Massachusetts, dónde estaba produciendo reportajes y documentarios para un canal de televisión.</p>

                                <p>Obtuve mi licenciatura en periodismo televisivo después de cuatro años de estudios a la <a href='http://www.bu.edu/com'>Escuela de comunicaciones</a> a la Universidad de Boston con especialización en lengua y literatura francesa.</p>

                                <p>En mi tiempo libre, el baile es algo muy importante en mi vida. Los dos tipos de baile que estoy haciendo son el Lindy Hop y Blues. Hay una pequeña comunidad de Lindy Hop en el DF. Me gusta también la comunidad internacional de Washington porque me da la opportunidad de practicar mi español.</p>
								
                                <p class="text-grey">
                                    Cordialemente,
                                </p>
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Firma de Grant Mukai' class="signature" />
								
                                <p class="text-grey">
                                    Grant Mukai
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
                                    <li>Grant Mukai</li>
                                    <li>Washington, Distrito de Columbia, EEUU</li>
                                    <li>+1 202 656 8317</li>
                                    <li>hola@grantmukai.com</li>
                                    <li>www.grantmukai.com/mexico</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                            <?php
							$boutonTelechargerWeb = "Descargar CV Web";
							$boutonTelechargerCom = "Descargar CV Communications";
							$cvMiseajour = "Indisponible";
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