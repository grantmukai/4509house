<?php date_default_timezone_set("America/Mexico_City");
/*Para México SOLAMENTE!!*/
$imageVille = 1;
$villeMax = 3;
/*Fin código específico para México */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-MX/credits.php";
}
?>