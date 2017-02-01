<!-- DÉBUT SECTION CV -->
<?php
$monCVtitre = "Mi Curriculum Vitae";
$monCVdesc = "Si llama los fracasos los experiencias, se puede poner en su curriculum vitae llamandolos desaf&iacute;os completos.";
$monEducation = "Mi Educaci&oacute;n";
$expProf = "Experiencias Profesionales";
$heureActuelle = "Ahora";
$respTravail = "Tareas:";
?>
<section id="cv" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title"><?php echo $monCVtitre; ?></h2>

                    <p class="section-subtitle">
                        <?php echo $monCVdesc; ?>
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
                        <?php echo $monEducation; ?>
                        <br>
                        2006 - 2010
                    </h3>

                    <div class="panel-group resume" id="education">
                        <?php 
						$requeteEducation = "SELECT school, degreetype, degreetitle, minortype, minortitle, start_date, end_date FROM education WHERE language = '{$lang_actuelle}' ORDER BY id;";
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
                        Experiencias Profesionales
                        <br>
                        2010 - Ahora
                    </h3>

                    <div class="panel-group resume" id="work">
                        <?php include "travail_base.php"; ?>
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