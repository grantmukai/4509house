<?php date_default_timezone_set("America/Mexico_City");
/*Para Chile SOLAMENTE!!*/
$imageVille = 1;
$villeMax = 0;
/*Fin código específico para Chile */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-CL/credits.php";
}
?>