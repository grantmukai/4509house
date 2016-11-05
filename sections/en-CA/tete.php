<?php date_default_timezone_set("America/Toronto");
/*For Canada ONLY! */
$imageVille = 1;
$villeMax = 6;
/* End of code specific for Canada */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/en-CA/credits.php";
}
?>