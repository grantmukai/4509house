<!-- DÉBUT SECTION CONTACT -->
<section id="contact" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Contactez-Moi/h2>

                    <p class="section-subtitle">
                        Avez-vous un projet que vous aimeriez discuter?
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
            
            <div class="row">
                <div class="col-md-12">

                    <!-- DÉBUT DÉTAILS CONTACT -->
                    <div class="contact-details text-center">
                        <div class="speech-bubble">
                            <i class="icon-Speach-Bubble11"></i>

                            <h4 style="font-size:24px;" class="text-grey">
                                Dites<br>Bonjour
                            </h4>
                        </div>
                        <!-- //.speech-bubble -->

                        <h2>Kiyoshi <strong>MUKA&Iuml;</strong></h2>

                        <h4 class="text-grey">bonjour@kiyoshimukai.com</h4>

                        <span class="divider center"></span>
                    </div>
                    <!-- //FIN DÉTAILS CONTACT -->
                </div>

                <div class="col-md-12">

                        <form id="contact-form" name="contact-form" action="assets/php/contactForm.php">

                            <div class="form-group">
                                <label class="sr-only" for="c_name">Nom</label>
                                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="c_email">Courriel</label>
                                <input type="email" id="c_email" class="form-control" name="c_email" placeholder="Courriel">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Votre message"></textarea>
                            </div>

                            <div style="display:none;" class="form-group">
                                <?php echo "<textarea class='form-control' id='c_language' name='c_language' rows='1'>fr-CA</textarea>"; ?>
                            </div>

                            <button type="submit" class="btn btn-custom-1"><i class="fa fa-bullhorn"></i> Envoyer</button>

                        </form>

                        <div class="ajax-response"></div>

                    </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //FIN SECTION CONTACT -->