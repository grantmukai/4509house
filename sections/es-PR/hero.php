<!-- DÉBUT HÉRO -->
<header id="accueil" class="hero">
    <div class="hero-body">
        <div class="hero-text text-center">
            <h1>
                Hola, mi nombre es Grant Mukai<br />Hello, my name is Grant Mukai<span class="blinker"></span>
            </h1>
            
            <?php
            if ($metier_actuel == "WEB") {
                echo "<p>Desarrollador Web y Gesti&oacute;n de Datos</p>";
            }
            if ($metier_actuel == "COM") {
                echo "<p>Comunicaciones y relaciones p&uacute;blicas</p>";
            }
            ?>
                                    
            <div class="page-scroll">
                <a href="#profile" class="btn btn-lg btn-custom">
                    Aprender M&aacute;s :)
                </a>
                <br />
                <?php
                if ($metier_actuel == "WEB") {
                echo "<a href='http://www.grantmukai.com?metier=com' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                &iquest;Busca mi trabajo en comunicaciones? &raquo;
                </a>";
                }
                if ($metier_actuel == "COM") {
                echo "<a href='http://www.grantmukai.com?metier=web' class='btn btn-xs btn-custom' style='margin-top:10px;'>
                &iquest;Busca mi trabajo en desarrollo Web? &raquo;
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