<?php date_default_timezone_set("Asia/Singapore");
/*For Singapore ONLY! */
$imageVille = 1;
$villeMax = 1;
/* End of code specific for Singapore */
if (isset($imageVille)) {
    $quelleVille = mt_rand(0,$villeMax);
    include "assets/images/villes/en-SG/credits.php";
}
?>