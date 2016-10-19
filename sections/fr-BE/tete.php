<?php date_default_timezone_set("Europe/Madrid");
/*Pour la Belgique SEULEMENT!!*/
$jeSuisEnEurope = "oui";
$imageVille = 1;
$villeMax = 0;
/*Fin code spécifique pour la Belgique */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/fr-BE/credits.php";
}
?>