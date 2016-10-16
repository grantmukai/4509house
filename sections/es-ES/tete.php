<?php date_default_timezone_set("Europe/Madrid");
/*Pour l'Espagne SEULEMENT!!*/
$jeSuisEnEurope = "oui";
$imageVille = 1;
$villeMax = 1;
/*Fin code spécifique pour l'Espagne */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-ES/credits.php";
}
?>