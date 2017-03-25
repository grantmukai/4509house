<!-- DÉBUT SECTION CV -->
<?php
$monCVtitre = "Mon Curriculum Vitae - <em lang='en-GB'>My Curriculum Vitae</em>";
$monEducation = "Mon Éducation - <em lang='en-GB'>My Education</em>";
$expProf = "Expériences Professionnelles - <em lang='en-GB'>Work Experience</em>";
$heureActuelle = "Présent <em lang='en-GB'>(Present)</em>";
$respTravail = "Tâches / <em lang='en-GB'>Tasks</em> :";
?>
<section id="cv" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title"><?php echo $monCVtitre; ?></h2>

                    <p class="section-subtitle">
                        <?php include "intro_base.php"; ?>
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
                        <?php echo $expProf; ?>
                        <br>
                        2010 - <?php echo $heureActuelle; ?>
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
