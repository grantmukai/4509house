<?php
$i = 0; //$i va être le numéro de "work" pour les accordéons de travail
$a = 0; //$a va être pour la liste de déscriptions
$requetePositionsWeb = "SELECT company, jobtitle, start_date, end_date FROM positions WHERE language='{$lang_actuelle}' AND type = '{$metier_actuel}' ORDER BY start_date DESC;";
$resultatPositionsWeb = $lien->query($requetePositionsWeb);
while($rang_positionsweb = $resultatPositionsWeb->fetch_assoc())
{
$i++; //Ceci ajoute 1 au numéro de "work" pour les accordéons de travail
$a = $a + 1000; //Ceci ajoute 1 pour changer la gamme de déscriptions
// Emplois pour WEB
//if ($a == 1000 && $metier_actuel == "WEB") {
//    $descriptionsWeb = 1000;
//} elseif ($a == 2000 && $metier_actuel == "WEB") {
//    $descriptionsWeb = 2000;
//} else if ($a ==3000 && $metier_actuel == "WEB") {
//    $descriptionsWeb = 3000;
//}
// Emplois pour COM
//if ($a == 1000 && $metier_actuel == "COM") {
//    $descriptionsWeb = 1000;
//} elseif ($a == 2000 && $metier_actuel == "COM") {
//    $descriptionsWeb = 2000;
//} else if ($a == 3000 && $metier_actuel == "COM") {
//    $descriptionsWeb = 3000;
//}
echo "<div class='resume-item'>";
    echo "<div class='resume-year'>";
        if (is_null($rang_positionsweb['end_date'])) {
            echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y')."</span>";
        } else {
            echo "<span class='resume-year'>".date('Y',strtotime($rang_positionsweb['start_date']))." - ".date('Y',strtotime($rang_positionsweb['end_date']))."</span>";
        }
    echo "</div>";
    echo "<!-- //.resume-year -->";

    echo "<div class='resume-btn'>";
        echo "<a href='#work{$i}' data-toggle='collapse' data-parent='#work'></a>";
    echo "</div>";
    echo "<!-- //.resume-btn -->";

    echo "<div class='panel'>";
        echo "<div class='panel-heading'>";
            echo "<div class='panel-title'>";
                echo "<h4 class='resume-title'>{$rang_positionsweb['jobtitle']} - {$rang_positionsweb['company']}</h4>";
            echo "</div>";
            echo "<!-- //.panel-title -->";
        echo "</div>";
        echo "<!-- //.panel-heading -->";

        echo "<div id='work{$i}' class='panel-collapse collapse in'>";
            echo "<div class='panel-body text-grey'>";
                echo "<p>
                    {$respTravail}
                    <br>";
                    $requeteDesc = "SELECT job FROM descriptions WHERE language='{$lang_actuelle}' AND type = '{$metier_actuel}' AND company_id = ".$a." ORDER BY id;";
                    $resultatDesc = $lien->query($requeteDesc);
                    echo "<ul>";
                    while($rang_desc = $resultatDesc->fetch_assoc())
                    {
                        echo "<li>{$rang_desc['job']}</li>";
                    }
                    echo "</ul>";
                echo "</p>";
            echo "</div>";
            echo "<!-- //.panel-body -->";
        echo "</div>";
        echo "<!-- //.panel-collapse -->";
    echo "</div>";
    echo "<!-- //.panel -->";
echo "</div>";
echo "<!-- //.resume-item -->";                               
}
?>