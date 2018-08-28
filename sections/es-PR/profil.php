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
                                <img src="/assets/images/drapeaux/pr.png" alt="Bandera de Puerto Rico" class="drapeaux" />

                                <img src="/assets/images/drapeaux/us.png" alt="Bandera de los Estados Unidos" style="margin-left:5px;" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hola, mi nombre es Grant Kiyoshi Mukai</h2>

                                <p>
                                    Mi nombre es Grant Kiyoshi Mukai y soy el Gerente senior de Comunicaciones Digitales para <a href='http://www.projecthope.org'>Project HOPE</a> en Maryland.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Antes de unirme a Project HOPE, estaba trabajando en el Departamento de marketing y comunicaciones dónde ayudaba a mis colegios a gestionar el sitio público de la asociación y varios sitios WordPress destinados a promover la ciencia política y ayudar a las secciones de intereses especializadas a organizarse en la red. Asimismo, fui responsable de la gestión de bases de datos, analíticas estadísticas y la generación de datos. Hice estas tareas proporcionando el servicio excelente al cliente en inglés, francés y español.
                                </p>

                                <p class="text-grey">
                                    Trabajé también en la <a href='http://www.msb.edu'>Escuela de negocios McDonough</a> de la Universidad Georgetown en Washington y <a href='http://www.iqsolutions.com'>iQ Solutions</a> en Rockville, Maryland, desarrollando boletines electrónicos. Algunos clientes del sector salud para quiénes trabajé incluyen la Administración de Salud Mental y Abuso de Sustancias de los E.E.U.U. <em>(SAMHSA por sus siglas en inglés)</em> y los Institutos Nacionales de Salud <em>(NIH por sus siglas en inglés)</em>. Asimismo, creé y actualicé páginas Web en inglés y en español para el Instituto Nacional de Artritis y Enfermedades Musculoesqueléticas y de la Piel <em>(NIAMS por sus siglas en inglés)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Obtuve mi bacherillato en periodismo televisivo en la <a href='http://www.bu.edu/com'>Facultad de comunicaciones</a> de la Universidad de Boston con un menor en lengua y literatura francesa.
                                </p>
								
                                <p class="text-grey">
                                    En mi tiempo libre, me gustan mucho los bailes Lindy Hop, Blues y Zouk y me interesan las otras culturas internacionales de Washington.
                                </p>
								
                                <p class="text-grey">
                                    Cordialmente,
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
                                <h4>Contacto</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Grant Mukai</li>
                                    <li>Washington, Districto de Columbia, EEUU</li>
                                    <li>202-656-8317</li>
                                    <li>hola@grantmukai.com</li>
                                    <li>www.grantmukai.com/puertorico</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Descargar CV Web";
								$boutonTelechargerCom = "Descargar CV Comunicacioness";
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
