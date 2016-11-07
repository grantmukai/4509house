<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Desarrollador Web</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                        <div class="btn-group">
                                  <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Elige Su Pa&iacute;s
                                  <span class="caret"></span></button>
                                <?php require "pays.php"; ?>
                                </div>
                                <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/mx.png" alt="Bandera de M&eacute;xico" style="float:left;vertical-align:top;" />

                                <br />

                                <h2 style="clear:both;" class="section-title">Hola, me llamo Kiyoshi Mukai</h2>

                                <p>
                                    Me llamo Kiyoshi Mukai y soy un Desarrollador Web y Especialista de servicios y sistemas Web a la <a href='http://www.apsanet.org'>Asociaci&oacute;n estadounidense de ciencia pol&iacute;tica</a> en el Distrito de Columbia, Estados Unidos de Am&eacute;rica.
                                </p>

                                <span class="divider"></span>

                                <p>Trabajo en el Departamento de promoci&oacute;n y comunicaciones d&oacute;nde ayudo a mis colegios a gestionar el sitio p&uacute;blico de la asociaci&oacute;n y varios sitios WordPress destinados a promover la ciencia pol&iacute;tica y ayudar a nuestras secciones de intereses especializadas a organizarse en los redes. Asimismo, soy responsable de la gesti&oacute;n de bases de datos, anal&iacute;ticas estad&iacute;sticas y la generaci&oacute;n de formas de datos. Hago estas tareas proporcionando el servicio excelente al cliente en ingl&eacute;s, franc&eacute;s y espa&ntilde;ol. Aunque nuestras oficinas se encuentran en los Estados Unidos, tenemos miembros que vengan de todo el mundo.</p>

                                <p>Antes de unirme a la mi asociaci&oacute;n, trabaj&eacute; a la <a href='http://www.msb.edu'>Escuela McDonough de negocios</a> de la Universidad Georgetown en la ciudad capital de mi Distrito y <a href='http://www.iqsolutions.com'>iQ Solutions</a> en Maryland, el estado vecino, desarrollando boletines electr&oacute;nicos. Algunos clientes de salud para qui&eacute;nes estaba trabajando incluyeron la Administraci&oacute;n de Salud Mental y Abuso de Sustancias de E.E.U.U. y los Institutos Nacionales de Salud. Asimismo, cre&eacute; y actualic&eacute; paginas Web en ingl&eacute;s y en espa&ntilde;ol para el Instituto Nacional de Artritis y Enfermedades Musculoesquel&eacute;ticas y de la Piel.</p>

                                <p>Adem&aacute;s, muchas de mis responsabilidades incluyeron la verificaci&oacute;n de las p&aacute;ginas Web y documentos PDF para garantizar la conformidad a las normas establecidas por el W3C <em lang='en-CA'>(World Wide Web Consortium)</em>.</p>

                                <p>Antes de mi cambio de carrero de periodismo al desarrollo Web y gesti&oacute;n de datos, fue productor asociado de noticias al <i lang='en-US'><a href='http://www.wellesleymedia.org'>Wellesley Public Media</a></i> en el pueblo de Wellesley, Massachusetts, d&oacute;nde estaba produciendo reportajes y documentarios para un canal de televisi&oacute;n. En el noreste del pa&iacute;s, realic&eacute; contenido v&iacute;deo para la plataforma <a href='http://www.patch.com'>Patch.com</a>.</p>

                                <p>Obtuve mi licenciatura en periodismo televisivo despu&eacute;s de cuatro a&ntilde;os de estudios a la <a href='http://www.bu.edu/com'>Escuela de comunicaciones</a> a la Universidad de Boston con especializaci&oacute;n en lengua y literatura francesa.</p>

                                <p>En mi tiempo libre, el baile es algo muy importante en mi vida. Los dos tipos de baile que hago son el Lindy Hop y Blues. Hay una peque&ntilde;a comunidad de Lindy Hop en el DF. Me gusta tambi&eacute;n la comunidad internacional de Washington porque me da la opportunidad de practicar mi espa&ntilde;ol.</p>
								
                                <p class="text-grey">
                                    Cordialemente,
                                </p>
								
								<img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Grant Mukai&apos;s Signature' style='width:40%;height:40%;' />
								
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
                                    <li>Grant Muka&iuml;</li>
                                    <li>Washington, Distrito de Columbia, EEUU</li>
                                    <li>+1 202 656 8317</li>
                                    <li>hola@kiyoshimukai.com</li>
                                    <li>www.kiyoshimukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <h4>Descargar CV Web</h4>
                                <?php
                                $requeteBoutonsWebPDF = "SELECT * FROM fichiers WHERE langue_pays = 'esMX' AND metier = 'web' AND type = 'pdf';";
                                $resultatBoutonsWebPDF = $lien->query($requeteBoutonsWebPDF);
                                while($rang_BoutonsWebPDF = $resultatBoutonsWebPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebPDF['date'])) {
                                            echo "<a href='cv_files/es-MX/Mukai_webCV_esMX_0{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/es-MX/Mukai_webCV_esMX_{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsWebPDF['taille']} {$rang_BoutonsWebPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsWebDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'esMX' AND metier = 'web' AND type = 'docx';";
                                $resultatBoutonsWebDOCX = $lien->query($requeteBoutonsWebDOCX);
                                while($rang_BoutonsWebDOCX = $resultatBoutonsWebDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebDOCX['date'])) {
                                            echo "<a href='cv_files/es-MX/Mukai_webCV_esMX_0{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/es-MX/Mukai_webCV_esMX_{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsWebDOCX['taille']} {$rang_BoutonsWebDOCX['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                ?>
                                <h4>Descargar CV Comunicaciones</h4>
                                <?php
                                $requeteBoutonsComPDF = "SELECT * FROM fichiers WHERE langue_pays = 'esMX' AND metier = 'com' AND type = 'pdf';";
                                $resultatBoutonsComPDF = $lien->query($requeteBoutonsComPDF);
                                while($rang_BoutonsComPDF = $resultatBoutonsComPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComPDF['date'])) {
                                            echo "<a href='cv_files/es-MX/Mukai_comCV_esMX_0{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/es-MX/Mukai_comCV_esMX_{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsComPDF['taille']} {$rang_BoutonsComPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsComDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'esMX' AND metier = 'com' AND type = 'docx';";
                                $resultatBoutonsComDOCX = $lien->query($requeteBoutonsComDOCX);
                                while($rang_BoutonsComDOCX = $resultatBoutonsComDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComDOCX['date'])) {
                                            echo "<a href='cv_files/es-MX/Mukai_comCV_esMX_0{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/es-MX/Mukai_comCV_esMX_{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
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