<!-- DÉBUT SECTION CV -->
<?php
$monCVtitre = "Mon Curriculum Vitae";
$monCVdesc = "Si vous appelez les &eacute;checs des exp&eacute;riences, vous pouvez les mettre sur votre CV en les appelant des ach&egrave;vements.";
$monEducation = "Mon &Eacute;ducation";
$expProf = "Exp&eacute;riences Professionnelles";
$heureActuelle = "Pr&eacute;sent";
$respTravail = "T&acirc;ches :";
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
						<?php include 'education_base.php'; ?>
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
						<?php include 'travail_base.php'; ?>
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