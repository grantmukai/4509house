<!-- DÉBUT HÉRO -->
<header id="accueil" class="hero">
    <div class="hero-body">
        <div class="hero-text text-center">
            <h1>
                Bonjour! Je m'appelle Kiyoshi MUKA&Iuml;<br />Guten Tag, Buongiorno, Allegra <span class="blinker"></span>
            </h1>
            
            <?php
            if ($metier_actuel == "WEB") {
                echo "<p>D&eacute;veloppement Web et Gestion de Bases de Donn&eacute;es</p>";
            }
            if ($metier_actuel == "COM") {
                echo "<p>Communications et Relations Publiques</p>";
            }
            ?>
                                    
            <div class="page-scroll">
                <a href="#profile" class="btn btn-lg btn-custom">
                    Apprenez d'avantage :)
                </a>
                <br />
                <?php
                if ($metier_actuel == "WEB") {
                echo "<a href='http://www.grantmukai.com?metier=com' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                Vous cherchez mon expe&eacute;rience en communicacations? &raquo;
                </a>";
                }
                if ($metier_actuel == "COM") {
                echo "<a href='http://www.grantmukai.com?metier=web' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                Vous cherchez mon expe&eacute;rience en d&eacute;veloppement Web? &raquo;
                </a>";  
                }
                ?>
            <!-- //.page-scroll -->
        </div>
        <!-- //.hero-text -->
    </div>
    <!-- //.hero-body -->
</header>
<!-- //FIN HÉRO -->