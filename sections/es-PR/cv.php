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
                    <h2 class="section-title">Mi Curriculum Vitae</h2>

                    <p class="section-subtitle">
                        Si llama los fracasos los experiencias, se puede poner en su curriculum vitae llamandolos desaf&iacute;os completos.
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
                        Mi Educación
                        <br>
                        2006 - 2010
                    </h3>

                    <div class="panel-group resume" id="education">
                        <?php 
						include "education_base.php";
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
                        <?php
						include "travail_base.php";
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