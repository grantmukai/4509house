<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Kiyoshi Mukai</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                                <div class="btn-group">
                                  <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Select Your Country
                                  <span class="caret"></span></button>
                                <?php require "pays.php"; ?>
                                </div>
                                <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/ca.png" alt="Flag of Canada" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hello, I'm Kiyoshi Mukai<br />Bonjour, je suis Kiyoshi Mukaï</h2>

                                <p>
                                    My name is Kiyoshi Mukai and I am a Digital Marketing Coordinator for <a href="https://www.toctoccommunications.com">Toc Toc Communications</a> in Montréal, Québec.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">Before relocating to Canada, I was the Managing Web Producer at the <a href='https://www.aps.org'>American Physical Society</a> in Maryland, United States of America. While in my previous postion, I formulated Web content strategy and layout designs for the main APS website as well as several physics websites owned by APS' clients. I also ensured that digital information was up to date and I reviewed content and analytics to determine how to best promote their programs.</p>

                                <p class="text-grey">Prior to working at APS, I worked in Web content strategy where I led the website transition for <a href="https://www.projecthope.org">Project HOPE</a> and I also wrote blog articles and press releases for online publication while leading the Web content strategy for SEO optimization and fundraising efforts. As I have lived all over the world, I have a diverse international background and speak French and Spanish.</p>

                                <p class="text-grey">I am a proud alumnus of Boston University's <a href='https://www.bu.edu/com'>College of Communication</a> where I graduated with a Bachelor of Science in Broadcast Journalism and a minor in French Language and Literature.</p>

                                <p class="text-grey">I often spend my free time dancing Brazilian Zouk and have been active in Montréal for various dance events.</p>

                                <p>Feel free to take a look at my website and I hope to talk to you soon.</p>
                                
                                <p class="text-grey">
                                    Sincerely,
                                </p>
                                
                                <img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Kiyoshi Mukai&apos;s Signature' class="signature" />
                                
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
                                <h4>Contact Details</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Kiyoshi Mukai</li>
                                    <li>Montréal, Québec</li>
                                    <li>www.kiyoshimukai.ca</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                
                                <?php
                                $boutonTelechargerWeb = "Download Web CV";
                                $boutonTelechargerCom = "Download Communications CV";
								$cvMiseajour = "Unavailable";
                                $IdTelechargerWebDoc = "webdoccvenca";
                                $IdTelechargerWebPdf = "webpdfcvenca";
                                $IdTelechargerComDoc = "comdoccvenca";
                                $IdTelechargerComPdf = "compdfcvenca";
                                /*$nomFamille = "Baker";*/
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
