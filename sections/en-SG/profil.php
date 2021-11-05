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
                                <img src="/assets/images/drapeaux/sg.png" alt="Flag of Singapore" class="drapeaux" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hello, I'm Kiyoshi Mukai</h2>

                                <p>
                                    My name is Kiyoshi Mukai and I am the Managing Web Producer at the <a href='https://www.aps.org'>American Physical Society</a> in the United States of America.
                                </p>

                                <span class="divider"></span>

                                <p>Prior to working at APS, I work in Web content strategy where I led the website transition for Project HOPE and I also wrote blog articles and press releases for online publication while formulating the Web content strategy for SEO optimisation and fundraising efforts. As I have lived all over the world, I have a diverse international background and speak French and Spanish.</p>

                                <p>I also worked for the <a href="https://www.apsanet.org">American Political Science Association</a> where I helped manage the association's public site as well as several WordPress sites devoted to showcasing the association's programmes and research. I managed member databases, researched site analytics and generated data reports while providing excellent customer service to our members in English, French and Spanish.</p>

                                <p>I am a proud alumnus of Boston University's <a href='https://www.bu.edu/com'>College of Communication</a> where I graduated with a degree in Broadcast Journalism and a concentration in French Language and Literature.</p>

                                <p>I often spend my free time dancing Lindy Hop, Blues and Brazilian Zouk.</p>

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
                                    <li>Washington, District of Columbia, USA</li>
                                    <li>+1 202 656 8317</li>
                                    <li>hello@grantmukai.com</li>
                                    <li>www.grantmukai.com/singapore</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                
                                <?php
                                $boutonTelechargerWeb = "Download Web CV";
                                $boutonTelechargerCom = "Download Communications CV";
								$cvMiseajour = "Unavailable";
                                $IdTelechargerWebDoc = "webdoccvensg";
                                $IdTelechargerWebPdf = "webpdfcvensg";
                                $IdTelechargerComDoc = "comdoccvensg";
                                $IdTelechargerComPdf = "compdfcvensg";
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
