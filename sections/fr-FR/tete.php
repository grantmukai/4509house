<?php date_default_timezone_set("Europe/Paris");
/*Pour France SEULEMENT!!*/
$jeSuisEnEurope = "oui";
$imageVille = 1;
$villeMax = 2;
$drapeauNational = 1;
/*Fin code spécifique au Québec */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/fr-FR/credits.php";
}
?>