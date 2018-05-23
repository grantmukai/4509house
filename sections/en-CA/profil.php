<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Grant Mukai</h4>
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

                                <h2 style="clear:both;" class="section-title">Hello, I'm Grant Mukai<br />Bonjour, je suis Kiyoshi Mukaï</h2>

                                <p>
                                    My name is Grant Mukai (Kiyoshi en français) and I am the Senior Digital Communications Manager at <a href='http://www.projecthope.org'>Project HOPE</a> in Maryland, United States of America.
                                </p>

                                <span class="divider"></span>

                                <p>I work in development and communications where I am leading our website transition and I also write blog articles and press releases for online publication. Thanks to my strong multimedia background, I also edit videos showcasing our volunteers and programmes around the world. As I have lived all over the world, I have a diverse international background and speak French and Spanish.</p>

                                <p>Prior to joining Project HOPE, I worked for the American Political Science Association where I helped manage the association's public site as well as several WordPress sites devoted to showcasing the association's programmes and research. I also managed member databases, researched site analytics and generated data reports while providing excellent customer service to our members in English, French and Spanish. Although APSA is located in the United States, there is a very large Canadian membership.</p>

                                <p>Previous positions included working at both the <a href='http://msb.georgetown.edu'>Georgetown University McDonough School of Business</a>, in the District of Columbia, and <a href='http://www.iqsolutions.com'>iQ Solutions</a> in Rockville, Maryland, developing email newsletters. Some of the healthcare clients I worked for include the Substance Abuse and Mental Health Services Administration (SAMHSA) and the National Institutes of Health (NIH). I have also produced and updated English and Spanish webpages for the National Institutes of Arthritis and Musculoskeletal and Skin Diseases (NIAMS).</p>

                                <p>While working as a journalist in the Boston, Massachusetts area, I was an Associate News Producer for <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> in the town of Wellesley, Massachusetts, where I produced news reports and documentaries for the local cable access station.</p>

                                <p>I am a proud alumnus of Boston University's <a href='http://www.bu.edu/com'>College of Communication</a> where I graduated with a Bachelor of Science in Broadcast Journalism and a minor in French Language and Literature.</p>

                                <p>I often spend my free time dancing Lindy Hop and Blues and make several trips a year to Montréal for various dance events.</p>

                                <p>Feel free to take a look at my website and I hope to talk to you soon.</p>
                                
                                <p class="text-grey">
                                    Sincerely,
                                </p>
                                
                                <img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Grant Mukai&apos;s Signature' class="signature" />
                                
                                <p class="text-grey">
                                    Grant Mukai
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
                                    <li>Grant Mukai</li>
                                    <li>Washington, District of Columbia, USA</li>
                                    <li>438-228-0753</li>
                                    <li>hello@grantmukai.com</li>
                                    <li>www.grantmukai.com/canada</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                
                                <?php
                                $boutonTelechargerWeb = "Download Web CV";
                                $boutonTelechargerCom = "Download Communications CV";
								$cvMiseajour = "Unavailable";
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
