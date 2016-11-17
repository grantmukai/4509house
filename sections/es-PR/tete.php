<?php date_default_timezone_set("America/Puerto_Rico");
/*Para Puerto Rico SOLAMENTE!!*/
//$jeSuisEnEurope = "non";
$imageVille = 0;
$villeMax = 0;
/*Fin codigo especifico para Puerto Rico */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/es-PR/credits.php";
}
?>