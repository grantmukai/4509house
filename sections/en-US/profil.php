<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Grant Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Web Developer</h4>
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
                                <img src="/assets/images/drapeaux/us.png" alt="Flag of the United States" style="float:left;vertical-align:top;" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hello, I'm Grant Mukai</h2>

                                <p>
                                    My name is Grant Mukai and I am a front-end Web developer and systems support specialist for the <a href='http://www.apsanet.org'>American Political Science Association</a> (APSA) in the District of Columbia.
                                </p>

                                <span class="divider"></span>

                                <p>I work in the Marketing and Communications Department where I help manage our association's primary website as well as several small-scale WordPress sites devoted to promoting political science and helping our special interest sections organize themselves on the Web. I also serve as the primary point of contact for our database management and assist my team with our social media and publications while providing excellent customer service to our members in English, French and Spanish. Although we are located in the United States, we have a very large international membership base.</p>

                                <p>Before joining APSA, I worked at both the <a href='http://msb.georgetown.edu'>Georgetown University McDonough School of Business</a> in Washington and <a href='http://www.iqsolutions.com'>iQ Solutions</a> in Rockville, Maryland, developing email newsletters. Some of the healthcare agencies I worked for include the Substance Abuse and Mental Health Services Administration (SAMHSA) and the National Institutes of Health (NIH). I have also produced and updated English and Spanish webpages for the National Institutes of Arthritis and Musculoskeletal and Skin Diseases (NIAMS).</p>

                                <p>A large part of my responsibilities at iQ Solutions consisted of making sure that webpages and documents met the Web Accessibility Guidelines set forth by the World Wide Web Consortium and Section 508 of the Americans with Disabilities Act.</p>

                                <p>Prior to my career switch from journalism to Web development, I was an Associate News Producer for <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> in the town of Wellesley, Massachusetts, where I produced news reports and documentaries for the local cable access station. In the Boston area, I was instrumental in bringing online video content to the Patch.com platform where I provided freelance video work on a number of local events and businesses and ran a weekly real estate column.</p>

                                <p>I am a proud alumnus of Boston University's <a href='http://www.bu.edu/com'>College of Communication</a> where I graduated with a Bachelor of Science in Broadcast Journalism and a minor in French Language and Literature.</p>

                                <p>In my free time, I can be found dancing Lindy Hop and Blues, two popular styles of social dance, and hanging out in Washington's international scene.</p>

                                <p>I hope to hear from you soon!</p>
								
                                <p class="text-grey">
                                    Sincerely,
                                </p>
								
								<img src='assets/images/signatures/signature_grantmukai_blanc.png' alt='Grant Mukai&apos;s Signature' style='width:40%;height:40%;' />
								
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
                                    <li>www.grantmukai.com</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <h4>Download Web Resume</h4>
                                <?php
                                $requeteBoutonsWebPDF = "SELECT * FROM fichiers WHERE langue_pays = 'enUS' AND metier = 'web' AND type = 'pdf';";
                                $resultatBoutonsWebPDF = $lien->query($requeteBoutonsWebPDF);
                                while($rang_BoutonsWebPDF = $resultatBoutonsWebPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebPDF['date'])) {
                                            echo "<a href='cv_files/en-US/Mukai_webCV_enUS_0{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/en-US/Mukai_webCV_enUS_{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsWebPDF['taille']} {$rang_BoutonsWebPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsWebDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'enUS' AND metier = 'web' AND type = 'docx';";
                                $resultatBoutonsWebDOCX = $lien->query($requeteBoutonsWebDOCX);
                                while($rang_BoutonsWebDOCX = $resultatBoutonsWebDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsWebDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsWebDOCX['date'])) {
                                            echo "<a href='cv_files/en-US/Mukai_webCV_enUS_0{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/en-US/Mukai_webCV_enUS_{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsWebDOCX['taille']} {$rang_BoutonsWebDOCX['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                ?>
                                <h4>Download Communications Resume</h4>
                                <?php
                                $requeteBoutonsComPDF = "SELECT * FROM fichiers WHERE langue_pays = 'enUS' AND metier = 'com' AND type = 'pdf';";
                                $resultatBoutonsComPDF = $lien->query($requeteBoutonsComPDF);
                                while($rang_BoutonsComPDF = $resultatBoutonsComPDF->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComPDF['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComPDF['date'])) {
                                            echo "<a href='cv_files/en-US/Mukai_comCV_enUS_0{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                            echo "<a href='cv_files/en-US/Mukai_comCV_enUS_{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsComPDF['taille']} {$rang_BoutonsComPDF['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
                                $requeteBoutonsComDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'enUS' AND metier = 'com' AND type = 'docx';";
                                $resultatBoutonsComDOCX = $lien->query($requeteBoutonsComDOCX);
                                while($rang_BoutonsComDOCX = $resultatBoutonsComDOCX->fetch_assoc())
                                {
                                    if (is_null($rang_BoutonsComDOCX['visible'])) {
                                    echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                        echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                    echo "</a><br />";
                                    } else {
                                        if (preg_match('/^\d{5}$/', $rang_BoutonsComDOCX['date'])) {
                                            echo "<a href='cv_files/en-US/Mukai_comCV_enUS_0{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        } else {
                                                echo "<a href='cv_files/en-US/Mukai_comCV_enUS_{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                        }
                                        echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsComDOCX['taille']} {$rang_BoutonsComDOCX['mesure']})";
                                    echo "</a><br />";
                                    }
                                }
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