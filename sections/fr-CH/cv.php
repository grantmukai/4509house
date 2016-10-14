<!-- DÉBUT SECTION CV -->
<section id="cv" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Mon Curriculum Vitae</h2>

                    <p class="section-subtitle">
                        Si vous appelez les &eacute;checs des exp&eacute;riences, vous pouvez les mettre sur votre CV en les appelant des ach&egrave;vements.
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
            
            <!-- DÉBUT ÉDUCATION -->
            <div class="row education">
                <div class="col-md-10 col-md-offset-1">
                    <h3>
                        Mon &Eacute;ducation
                        <br>
                        2006 - 2010
                    </h3>

                    <div class="panel-group resume" id="education">
                        <?php 
						$requeteEducation = "SELECT school, degreetype, degreetitle, minortype, minortitle, start_date, end_date FROM education WHERE language = 'fr-CH' ORDER BY id;";
						$resultatEducation = $lien->query($requeteEducation);
						while($rang_education = $resultatEducation->fetch_assoc())
						{
							echo "<div class='resume-item'>";
                            echo "<div class='resume-year'>";
                                echo "<span class='resume-year'>".date('Y',strtotime($rang_education['start_date']))." - ".date('Y',strtotime($rang_education['end_date']))."</span>";
                            echo "</div>";
                            echo "<!-- //.resume-year -->";

                            echo "<div class='resume-btn'>";
                                echo "<a href='#education1' class='collapse' data-toggle='collapse' data-parent='#education'></a>";
                            echo "</div>";
                            echo "<!-- //.resume-btn -->";

                            echo "<div class='panel'>";
                                echo "<div class='panel-heading'>";
                                    echo "<div class='panel-title'>";
                                        echo "<h4 class='resume-title'>{$rang_education['degreetype']} - {$rang_education['school']}</h4>";
                                    echo "</div>";
                                    echo "<!-- //.panel-title -->";
                                echo "</div>";
                                echo "<!-- //.panel-heading -->";

                                echo "<div id='education1' class='panel-collapse collapse'>";
                                    echo "<div class='panel-body text-grey'>";
                                        echo "<p>
                                            {$rang_education['degreetype']} - {$rang_education['degreetitle']} 
											<br>
											{$rang_education['minortype']} - {$rang_education['minortitle']}
                                        </p>";
                                    echo "</div>";
                                    echo "<!-- //.panel-body -->";
                                echo "</div>";
                                echo "<!-- //.panel-collapse -->";
                            echo "</div>";
                            echo "<!-- //.panel -->";
                        echo "</div>";
                        echo "<!-- //.resume-item -->";
					}
						?>

                    </div>
                    <!-- //.panel-group -->
                </div>
                <!-- //.col-md-10 -->
            </div>
            <!-- //FIN ÉDUCATION -->
        
            <!-- DÉBUT EXPÉRIENCE PROFESSIONNELLES -->
            <div class="row work-experience">
                <div class="col-md-10 col-md-offset-1">
                    <h3>
                        Exp&eacute;riences Professionnelles
                        <br>
                        2010 - Pr&eacute;sent
                    </h3>

                    <div class="panel-group resume" id="work">
                        <?php
						$i = 0; //$i va être le numéro de "work" pour les accordéons de travail
                        $a = 0; //$a va être pour la liste de déscriptions
                        $requetePositionsWeb = "SELECT company, jobtitle, start_date, end_date FROM positions WHERE language='fr-CH' AND type = 'WEB' ORDER BY start_date DESC;";
                        $resultatPositionsWeb = $lien->query($requetePositionsWeb);
                        while($rang_positionsweb = $resultatPositionsWeb->fetch_assoc())
                        {
						$i++; //Ceci ajoute 1 au numéro de "work" pour les accordéons de travail
                        $a++; //Ceci ajoute 1 pour changer la gamme de déscriptions
                        if ($a == 1) {
                            $descriptionsWeb = 'apsa';
                        } elseif ($a == 2) {
                            $descriptionsWeb = 'georgetown';
                        } else if ($a ==3) {
                            $descriptionsWeb = 'iq';
                        }
                        echo "<div class='resume-item'>";
                            echo "<div class='resume-year'>";
                                if (is_null($rang_positionsweb['end_date'])) {
                                    echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y')."</span>";
                                } else {
                                    echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y',strtotime($rang_positionsweb['end_date']))."</span>";
                                }
                            echo "</div>";
                            echo "<!-- //.resume-year -->";

                            echo "<div class='resume-btn'>";
                                echo "<a href='#work{$i}' data-toggle='collapse' data-parent='#work'></a>";
                            echo "</div>";
                            echo "<!-- //.resume-btn -->";

                            echo "<div class='panel'>";
                                echo "<div class='panel-heading'>";
                                    echo "<div class='panel-title'>";
                                        echo "<h4 class='resume-title'>{$rang_positionsweb['jobtitle']} - {$rang_positionsweb['company']}</h4>";
                                    echo "</div>";
                                    echo "<!-- //.panel-title -->";
                                echo "</div>";
                                echo "<!-- //.panel-heading -->";

                                echo "<div id='work{$i}' class='panel-collapse collapse in'>";
                                    echo "<div class='panel-body text-grey'>";
                                        echo "<p>
                                            R&eacute;sponsibilities:
                                            <br>";
                                            $requeteDesc = "SELECT job FROM descriptions WHERE language='fr-CH' AND type = 'WEB' AND company = '".$descriptionsWeb."' ORDER BY id;";
                                            $resultatDesc = $lien->query($requeteDesc);
                                            echo "<ul>";
                                            while($rang_desc = $resultatDesc->fetch_assoc())
                                            {
                                                echo "<li>{$rang_desc['job']}</li>";
                                            }
                                            echo "</ul>";
                                        echo "</p>";
                                    echo "</div>";
                                    echo "<!-- //.panel-body -->";
                                echo "</div>";
                                echo "<!-- //.panel-collapse -->";
                            echo "</div>";
                            echo "<!-- //.panel -->";
                        echo "</div>";
                        echo "<!-- //.resume-item -->";                               
                        }
                        ?>
                    </div>
                    <!-- //.panel-group -->
                </div>
                <!-- //.col-md-10 -->
            </div>
            <!-- //FIN EXPÉRIENCES PROFESSIONNELLES -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //FIN SECTION CV -->