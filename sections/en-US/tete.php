<?php date_default_timezone_set("America/Montevideo");
/*For United States ONLY! */
$imageVille = 1;
$villeMax = 6;
/* End of code specific for United States */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/en-US/credits.php";
}
?>