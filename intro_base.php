<?php $requeteIntro = "SELECT paragraph FROM intros WHERE language = '{$lang_actuelle}' AND type = '{$metier_actuel}';";
$resultatIntro = $lien->query($requeteIntro);
while($rang_intro = $resultatIntro->fetch_assoc())
{
    echo $rang_intro['paragraph'];
}
?>