<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Pérez" class="img-responsive"/>
                        
                        <h4 class="title">Grant Pérez (Mukai)</h4>
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

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Grant Pérez</h2>

                                <p>
                                    Me llamo Grant Pérez y soy un Desarrollador Web y Especialista de servicios y sistemas Web a la <a href='http://www.apsanet.org'>Asociación estadounidense de ciencia política</a> (APSA) en el Distrito de Columbia.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Trabajo en el Departamento de marketing y comunicaciones dónde ayudo a mis colegios a gestionar el sitio público de la asociación y varios sitios WordPress destinados a promover la ciencia política y ayudar a nuestras secciones de intereses especializadas a organizarse en la red. Asimismo, soy responsable de la gestión de bases de datos, analíticas estadísticas y la generación de datos. Hago estas tareas proporcionando el servicio excelente al cliente en inglés, francés y español. Aunque nuestras oficinas se encuentran en los Estados Unidos, tenemos miembros veniendo de todo el mundo.
                                </p>

                                <p class="text-grey">
                                    Antes de unirme a la APSA, trabajé a la <a href='http://www.msb.edu'>Escuela de negocios McDonough</a> de la Universidad Georgetown en Washington y <a href='http://www.iqsolutions.com'>iQ Solutions</a> en Rockville, Maryland, desarrollando boletines electrónicos. Algunos clientes de salud para quiénes estaba trabajando incluyeron la Administración de Salud Mental y Abuso de Sustancias de E.E.U.U. <em>(SAMHSA por sus siglas en inglés)</em> y los Institutos Nacionales de Salud <em>(NIH por sus siglas en inglés)</em>. Asimismo, creí y actualicé páginas Web en inglés y en español para el Instituto Nacional de Artritis y Enfermedades Musculoesqueléticas y de la Piel <em>(NIAMS por sus siglas en inglés)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Además, muchas de mis responsabilidades incluyeron la verificación de las páginas Web y documentos PDF para garantizar la conformidad a las normas establecidas por la Sección 508 de la Ley de Derechos de Discapacidados de los Estados Unidos.
                                </p>
								
                                <p class="text-grey">
                                    Antes de mi cambio de carrero de periodismo al desarrollo Web y gestión de datos, fue productor asociado de noticias al <i lang='en-US'><a href='http://www.wellesleymedia.org'>Wellesley Public Media</a></i> en el pueblo de Wellesley, Massachusetts, dónde estaba produciendo reportajes y documentarios para un canal de televisión. En la metrópoli de Boston, realicé contenido vídeo para la plataforma <a href='http://www.patch.com'>Patch.com</a>.
                                </p>
								
                                <p class="text-grey">
                                    Obtuve mi bacherillato en periodismo televisivo a la <a href='http://www.bu.edu/com'>Escuela de comunicaciones</a> de la Universidad de Boston con un menor en lengua y literatura francesa.
                                </p>
								
                                <p class="text-grey">
                                    En mi tiempo libre, me gustan mucho los bailes Lindy Hop y Blues y me interesan las otras culturas internacionales de Washington.
                                </p>
								
                                <p class="text-grey">
                                    Cordialmente,
                                </p>
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Firma de Grant Mukai' class="signature" />
								
                                <p class="text-grey">
                                    Grant Mukai (Pérez)
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
                                    <li>Grant Mukai</li>
                                    <li>Washington, Districto de Columbia, EEUU</li>
                                    <li>202 656 8317</li>
                                    <li>hola@grantmukai.com</li>
                                    <li>www.grantmukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Descargar CV Web";
								$boutonTelechargerCom = "Descargar CV Comunicacioness";
								$cvMiseajour = "Actualización...";
				    				/* Estados Unidos: Capital de racismo mundial */
				    				$nomFamille = "Perez";
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
