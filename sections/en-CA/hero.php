<!-- DÉBUT HÉRO -->
<header id="home" class="hero">
    <div class="hero-body">
        <div class="hero-text text-center">
            <h1>
                Hello, I'm Grant Mukai <span class="blinker"></span>
            </h1>
            
            <?php
            if ($metier_actuel == "WEB") {
                echo "<p>Web Development &amp; Database Management</p>";
            }
            if ($metier_actuel == "COM") {
                echo "<p>Communications and Public Relations</p>";
            }
            ?>
            
            <div class="page-scroll">
                <a href="#profile" class="btn btn-lg btn-custom">
                    Learn More :)
                </a>
                <br />
                <?php
                if ($metier_actuel == "WEB") {
                echo "<a href='http://www.grantmukai.com?metier=com' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                Are you looking for my communications work? &raquo;
                </a>";
                }
                if ($metier_actuel == "COM") {
                echo "<a href='http://www.grantmukai.com?metier=web' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                Are you looking for my Web development work? &raquo;
                </a>";  
                }
                ?>
            </div>
            <!-- //.page-scroll -->
        </div>
        <!-- //.hero-text -->
    </div>
    <!-- //.hero-body -->
</header>
<!-- //FIN HÉRO -->