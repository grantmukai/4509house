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
                         <div class="btn-group" style="margin-bottom:10px;">
                            <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Choose Your Country
                            <span class="caret"></span></button>
                            <?php require "pays.php"; ?>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/us.png" alt="Flag of the United States" class="drapeaux" />


                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hello, I'm Grant Mukai</h2>

                                <p>
                                    My name is Grant Mukai and I am the Managing Web Producer for the <a href='https://www.aps.org'>American Physical Society</a> in Maryland.
                                </p>

                                <span class="divider"></span>

                                <p>At APS, I am responsible for content strategy, design and structure propositions concerning our physics websites and I assist our marketing team with Web content updates. I also work with our clients to better organize their digital content so they can promote the knowledge and teaching of physics and increase ethic diversity within the field.</p>

                                <p>Before taking this position, I worked as the Senior Digital Communications Manager at <a href="https://www.projecthope.org">Project HOPE</a>, an international global health organization operating in over 26 countries. While at Project HOPE, I successfully managed the transition of our new website and then managed our content strategy to increase our organic search and direct response fundraising.</p>

								<p>What sets me apart from others in the Web content space is my journalism background. I studied journalism at Boston University before working as a journalist and then going into non-profit work. Working with breaking news and in disaster response are very high-stakes environments with pressing deadlines so I can handle just about any project thrown at me.</p>

                                <p>I've also worked for the <a href="https://www.apsanet.org">American Political Science Association</a> where I helped manage the association's primary website as well as several WordPress sites devoted to promoting political science and helping the special interest sections organize themselves on the Web. I served as the primary point of contact for our membership database and assisted my team with our social media and email marketing while providing excellent customer service to our members in English, French and Spanish.</p>

                                <p>I am a proud alumnus of Boston University's <a href='https://www.bu.edu/com'>College of Communication</a> where I graduated with a Bachelor of Science in Broadcast Journalism and a minor in French Language and Literature.</p>

                                <p>In my free time, I can be found dancing Lindy Hop, Blues and Brazilian Zouk - three popular styles of social dance.</p>

                                <p>I hope to hear from you soon!</p>
								
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
                                    <li>202-656-8317</li>
                                    <li>hello@grantmukai.com</li>
                                    <li>www.grantmukai.com/usa</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <?php
								$boutonTelechargerWeb = "Download Web Resume";
								$boutonTelechargerCom = "Download Communications Resume";
								$cvMiseajour = "Unavailable";
                                $IdTelechargerWebDoc = "webdoccvenus";
                                $IdTelechargerWebPdf = "webpdfcvenus";
                                $IdTelechargerComDoc = "comdoccvenus";
                                $IdTelechargerComPdf = "compdfcvenus";
								/*$nomFamille = "Baker";*/
								include "profil_base.php"; ?>
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