<!-- DÉBUT SECTION PROFIL -->
<section id="profil" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Muka&iuml;" class="img-responsive"/>
                        
                        <h4 class="title">D&eacute;veloppeur Web</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/pr.png" alt="Bandera de Puerto Rico" style="float:left;vertical-align:top;" />

                                <img src="/assets/images/drapeaux/us.png" alt="Bandera de los Estados Unidos" style="margin-left:5px; float:left;vertical-align:top;" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Grant Mukai</h2>

                                <p>
                                    Me llamo Grant Mukai y soy un Desarrollador Web y Especialista de servicios y sistemas Web a la <a href='http://www.apsanet.org'>Asociaci&oacute;n estadounidense de ciencia pol&iacute;tica</a> (APSA) en el Distrito de Columbia.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    Trabajo en el Departamento de marketing y comunicaciones d&oacute;nde ayudo a mis colegios a gestionar el sitio p&uacute;blico de la asociaci&oacute;n y varios sitios WordPress destinados a promover la ciencia pol&iacute;tica y ayudar a nuestras secciones de intereses especializadas a organizarse en la red. Asimismo, soy responsable de la gesti&oacute;n de bases de datos, anal&iacute;ticas estad&iacute;sticas y la generaci&oacute;n de datos. Hago estas tareas proporcionando el servicio excelente al cliente en ingl&eacute;s, franc&eacute;s y espa&ntilde;ol. Aunque nuestras oficinas se encuentran en los Estados Unidos, tenemos miembros vengan de todo el mundo.
                                </p>

                                <p class="text-grey">
                                    Antes de unirme a la APSA, trabaj&eacute; a la <a href='http://www.msb.edu'>Escuela de negocios McDonough</a> de la Universidad Georgetown en Washington y <a href='http://www.iqsolutions.com'>iQ Solutions</a> en Rockville, Maryland, desarrollando boletines electr&oacute;nicos. Algunos clientes de salud para qui&eacute;nes estaba trabajando incluyeron la Administraci&oacute;n de Salud Mental y Abuso de Sustancias de E.E.U.U. <em>(SAMHSA por sus siglas en ingl&eacute;s)</em> y los Institutos Nacionales de Salud <em>(NIH por sus siglas en ingl&eacute;s)</em>. Asimismo, cre&iacute; y actualic&eacute; paginas Web en ingl&eacute;s y en espa&ntilde;ol para el Instituto Nacional de Artritis y Enfermedades Musculoesquel&eacute;ticas y de la Piel <em>(NIAMS por sus siglas en ingl&eacute;s)</em>.
                                </p>
								
                                <p class="text-grey">
                                    Adem&aacute;s, muchas de mis responsabilidades incluyeron la verificaci&oacute;n de las p&aacute;ginas Web y documentos PDF para garantizar la conformidad a las normas establecidas por la Secci&oacute;n 508 de la Ley de Derechos de Discapacidados de los Estados Unidos.
                                </p>
								
                                <p class="text-grey">
                                    Antes de mi cambio de carrero de periodismo al desarrollo Web y gesti&oacute;n de datos, fue productor asociado de noticias al <i lang='en-US'><a href='http://www.wellesleymedia.org'>Wellesley Public Media</a></i> en el pueblo de Wellesley, Massachusetts, d&oacute;nde estaba produciendo reportajes y documentarios para un canal de televisi&oacute;n. En el metr&oacute;poli de Boston, realic&eacute; contenido v&iacute;deo para la plataforma <a href='http://www.patch.com'>Patch.com</a>.
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
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Signatura de Grant Mukai' style='width:40%;height:40%;' />
								
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
                                    <li>Washington, District de Columbia, USA</li>
                                    <li>+1 202 656 8317</li>
                                    <li>hola@grantmukai.com</li>
                                    <li>www.grantmukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <h4>Descargar CV Web</h4>
                                <?php
                                $requeteBoutonsWebPDF = "SELECT * FROM fichiers WHERE langue_pays = 'esPR' AND metier = 'web' AND type = 'pdf';";
                                $resultatBoutonsWebPDF = $lien->query($requeteBoutonsWebPDF);
                                while($rang_BoutonsWebPDF = $resultatBoutonsWebPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebPDF['date'])) {
                                            echo "<a href='cv_files/es-PR/Mukai_webCV_frCA_0{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/es-PR/Mukai_webCV_frCA_{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsWebPDF['taille']} {$rang_BoutonsWebPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsWebDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'esPR' AND metier = 'web' AND type = 'docx';";
                                $resultatBoutonsWebDOCX = $lien->query($requeteBoutonsWebDOCX);
                                while($rang_BoutonsWebDOCX = $resultatBoutonsWebDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebDOCX['date'])) {
                                            echo "<a href='cv_files/es-PR/Mukai_webCV_frCA_0{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/es-PR/Mukai_webCV_frCA_{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsWebDOCX['taille']} {$rang_BoutonsWebDOCX['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                ?>
                                <h4>Descargar CV Communications</h4>
                                <?php
                                $requeteBoutonsComPDF = "SELECT * FROM fichiers WHERE langue_pays = 'esPR' AND metier = 'com' AND type = 'pdf';";
                                $resultatBoutonsComPDF = $lien->query($requeteBoutonsComPDF);
                                while($rang_BoutonsComPDF = $resultatBoutonsComPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComPDF['date'])) {
                                            echo "<a href='cv_files/es-PR/Mukai_comCV_frCA_0{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/es-PR/Mukai_comCV_frCA_{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsComPDF['taille']} {$rang_BoutonsComPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsComDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'esPR' AND metier = 'com' AND type = 'docx';";
                                $resultatBoutonsComDOCX = $lien->query($requeteBoutonsComDOCX);
                                while($rang_BoutonsComDOCX = $resultatBoutonsComDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComDOCX['date'])) {
                                            echo "<a href='cv_files/es-PR/Mukai_comCV_frCA_0{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/es-PR/Mukai_comCV_frCA_{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsComDOCX['taille']} {$rang_BoutonsComDOCX['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
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