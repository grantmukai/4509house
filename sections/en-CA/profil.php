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
                                <img src="/assets/images/drapeaux/ca.png" alt="Flag of Canada" style="float:left;vertical-align:top;" />

                                <br /> 

                                <h2 style="clear:both;" class="section-title">Hello, I'm Grant Mukai</h2>

                                <p>
                                    My name is Grant Mukai and I am a Web developer and systems support specialist for the <a href='http://www.apsanet.org'>American Political Science Association</a> (APSA) in the District of Columbia, United States of America.
                                </p>

                                <span class="divider"></span>

                                <p>I work in the Marketing and Communications Department where I help manage our association's public site as well as several WordPress sites devoted to showcasing the association's offerings, promoting political science and helping our special interest sections organise themselves on the Web. I also manage member databases, research site analytics and generate data reports while providing excellent customer service to our members in English, French and Spanish. Although we are located in the United States, we have a very large international membership.</p>

                                <p>Before joining the APSA, I worked at both the <a href='http://msb.georgetown.edu'>Georgetown University McDonough School of Business</a>, also in Washington, and <a href='http://www.iqsolutions.com'>iQ Solutions</a> in Rockville, Maryland, developing email newsletters. Some of the healthcare clients I worked for include the Substance Abuse and Mental Health Services Administration (SAMHSA) and the National Institutes of Health (NIH). I have also produced and updated English and Spanish webpages for the National Institutes of Arthritis and Musculoskeletal and Skin Diseases (NIAMS).</p>

                                <p>A large part of my responsibilities have comprised making sure that webpages and documents meet the Web Accessibility Guidelines set forth by the World Wide Web Consortium (W3C).</p>

                                <p>Prior to my career switch from journalism to Web development and database management, I was an Associate News Producer for <a href='http://www.wellesleymedia.org'>Wellesley Public Media</a> in the town of Wellesley, Massachusetts, where I produced news reports and documentaries for the local cable access station. In the Boston area, I was instrumental in bringing online video content to the Patch.com platform where I provided freelance video work on a number of local events and businesses and ran a weekly real estate column.</p>

                                <p>I am a proud alumnus of Boston University's <a href='http://www.bu.edu/com'>College of Communication</a> where I graduated with a Bachelor of Science in Broadcast Journalism and a minor in French Language and Literature.</p>

                                <p>I often spend my free time dancing Lindy Hop and Blues and make several trips a year to Montr&eacute;al for various dance events. I also enjoy hanging out in Washington's international scene.</p>

                                <p>Feel free to take a look at my website and I hope to talk to you soon.</p>
								
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
                                
                                <?php
                                if ($metier_actuel == "WEB") {
                                    echo "<h4>Download Web CV</h4>";
                                    $requeteBoutonsWebPDF = "SELECT * FROM fichiers WHERE langue_pays = 'enCA' AND metier = 'web' AND type = 'pdf';";
                                    $resultatBoutonsWebPDF = $lien->query($requeteBoutonsWebPDF);
                                    while($rang_BoutonsWebPDF = $resultatBoutonsWebPDF->fetch_assoc())
                                    {
                                        if (is_null($rang_BoutonsWebPDF['visible'])) {
                                        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                            echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                        echo "</a><br />";
                                        } else {
                                            if (preg_match('/^\d{5}$/', $rang_BoutonsWebPDF['date'])) {
                                                echo "<a href='cv_files/en-CA/Mukai_webCV_enCA_0{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            } else {
                                                echo "<a href='cv_files/en-CA/Mukai_webCV_enCA_{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            }
                                            echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsWebPDF['taille']} {$rang_BoutonsWebPDF['mesure']})";
                                        echo "</a><br />";
                                        }
                                    }
                                    $requeteBoutonsWebDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'enCA' AND metier = 'web' AND type = 'docx';";
                                    $resultatBoutonsWebDOCX = $lien->query($requeteBoutonsWebDOCX);
                                    while($rang_BoutonsWebDOCX = $resultatBoutonsWebDOCX->fetch_assoc())
                                    {
                                        if (is_null($rang_BoutonsWebDOCX['visible'])) {
                                        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                            echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                        echo "</a><br />";
                                        } else {
                                            if (preg_match('/^\d{5}$/', $rang_BoutonsWebDOCX['date'])) {
                                                echo "<a href='cv_files/en-CA/Mukai_webCV_enCA_0{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            } else {
                                                    echo "<a href='cv_files/en-CA/Mukai_webCV_enCA_{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            }
                                            echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsWebDOCX['taille']} {$rang_BoutonsWebDOCX['mesure']})";
                                        echo "</a><br />";
                                        }
                                    }
                                }

                                if ($meter_actuel == "COM") {
                                    echo "<h4>Download Communications CV</h4>";
                                    $requeteBoutonsComPDF = "SELECT * FROM fichiers WHERE langue_pays = 'enCA' AND metier = 'com' AND type = 'pdf';";
                                    $resultatBoutonsComPDF = $lien->query($requeteBoutonsComPDF);
                                    while($rang_BoutonsComPDF = $resultatBoutonsComPDF->fetch_assoc())
                                    {
                                        if (is_null($rang_BoutonsComPDF['visible'])) {
                                        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                            echo "<i class='icon-File-Download'></i> PDF (Mise &agrave; jour en cours...)";
                                        echo "</a><br />";
                                        } else {
                                            if (preg_match('/^\d{5}$/', $rang_BoutonsComPDF['date'])) {
                                                echo "<a href='cv_files/en-CA/Mukai_comCV_enCA_0{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            } else {
                                                echo "<a href='cv_files/en-CA/Mukai_comCV_enCA_{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            }
                                            echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsComPDF['taille']} {$rang_BoutonsComPDF['mesure']})";
                                        echo "</a><br />";
                                        }
                                    }
                                    $requeteBoutonsComDOCX = "SELECT * FROM fichiers WHERE langue_pays = 'enCA' AND metier = 'com' AND type = 'docx';";
                                    $resultatBoutonsComDOCX = $lien->query($requeteBoutonsComDOCX);
                                    while($rang_BoutonsComDOCX = $resultatBoutonsComDOCX->fetch_assoc())
                                    {
                                        if (is_null($rang_BoutonsComDOCX['visible'])) {
                                        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
                                            echo "<i class='icon-File-Download'></i> DOCX (Mise &agrave; jour en cours...)";
                                        echo "</a><br />";
                                        } else {
                                            if (preg_match('/^\d{5}$/', $rang_BoutonsComDOCX['date'])) {
                                                echo "<a href='cv_files/en-CA/Mukai_comCV_enCA_0{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            } else {
                                                    echo "<a href='cv_files/en-CA/Mukai_comCV_enCA_{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
                                            }
                                            echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsComDOCX['taille']} {$rang_BoutonsComDOCX['mesure']})";
                                        echo "</a><br />";
                                        }
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