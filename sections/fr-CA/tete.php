<?php date_default_timezone_set("America/Montreal");
/*Pour Québec SEULEMENT!!*/
$imageVille = 1;
$villeMax = 6;
/*Fin code spécifique au Québec */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/fr-CA/credits.php";
}
?>