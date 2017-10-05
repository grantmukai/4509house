<!-- DÉBUT SECTION CV -->
<?php
$monCVtitre = "Mon Curriculum Vitae";
$monEducation = "Mon Éducation";
$expProf = "Expériences Professionnelles";
$heureActuelle = "Présent";
$respTravail = "Tâches :";
?>
<section id="cv" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Mon Curriculum Vitae</h2>
                    <h3>Compétences</h3>
                    <div class="section-subtitle" style="text-align:left;">
                        <?php include 'intro_base.php'; ?>
                    </div>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
            
            <!-- DÉBUT ÉDUCATION -->
            <div class="row education">
                <div class="col-md-10 col-md-offset-1">
                    <h3>
                        Mon Éducation
                        <br>
                        2006 - 2010
                    </h3>

                    <div class="panel-group resume" id="education">
                        <?php include "education_base.php"; ?>
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
                        Expériences Professionnelles
                        <br>
                        2010 - Présent
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