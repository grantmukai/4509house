<?php date_default_timezone_set("America/Puerto_Rico");
/*Pour France SEULEMENT!!*/
//$jeSuisEnEurope = "non";
$imageVille = 0;
$villeMax = 0;
/*Fin code spécifique au Québec */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-PR/credits.php";
}
?>