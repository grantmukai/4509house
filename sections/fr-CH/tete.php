<?php date_default_timezone_set("Europe/Paris");
/*Pour la Suisse SEULEMENT!!*/
$jeSuisEnEurope = "oui";
$imageVille = 1;
$villeMax = 6;
/*Fin code spécifique pour la Suisse */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/fr-CH/credits.php";
}
?>