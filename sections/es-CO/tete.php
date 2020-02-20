<?php date_default_timezone_set("America/Bogota");
/*Para Colombia SOLAMENTE!!*/
$imageVille = 1;
$villeMax = 1;
/*Fin código específico para Colombia */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-CO/credits.php";
}
?>