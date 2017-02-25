<?php
if (!isset($nomFamille)) {
	$nomFamille = "Mukai";
}
if ($metier_actuel == "WEB") {
    echo "<h4>{$boutonTelechargerWeb}</h4>";
    $requeteBoutonsWebPDF = "SELECT * FROM fichiers WHERE langue_pays = '{$lang_sanstraitdunion}' AND metier = 'web' AND type = 'pdf';";
    $resultatBoutonsWebPDF = $lien->query($requeteBoutonsWebPDF);
    while($rang_BoutonsWebPDF = $resultatBoutonsWebPDF->fetch_assoc())
    {
        if (is_null($rang_BoutonsWebPDF['visible'])) {
        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
            echo "<i class='icon-File-Download'></i> PDF ({$cvMiseajour})";
        echo "</a><br />";
        } else {
            if (preg_match('/^\d{5}$/', $rang_BoutonsWebPDF['date'])) {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_webCV_{$lang_sanstraitdunion}_0{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            } else {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_webCV_{$lang_sanstraitdunion}_{$rang_BoutonsWebPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            }
            echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsWebPDF['taille']} {$rang_BoutonsWebPDF['mesure']})";
        echo "</a><br />";
        }
    }
    $requeteBoutonsWebDOCX = "SELECT * FROM fichiers WHERE langue_pays = '{$lang_sanstraitdunion}' AND metier = 'web' AND type = 'docx';";
    $resultatBoutonsWebDOCX = $lien->query($requeteBoutonsWebDOCX);
    while($rang_BoutonsWebDOCX = $resultatBoutonsWebDOCX->fetch_assoc())
    {
        if (is_null($rang_BoutonsWebDOCX['visible'])) {
        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
            echo "<i class='icon-File-Download'></i> DOCX ({$cvMiseajour})";
        echo "</a><br />";
        } else {
            if (preg_match('/^\d{5}$/', $rang_BoutonsWebDOCX['date'])) {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_webCV_{$lang_sanstraitdunion}_0{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            } else {
                    echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_webCV_{$lang_sanstraitdunion}_{$rang_BoutonsWebDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            }
            echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsWebDOCX['taille']} {$rang_BoutonsWebDOCX['mesure']})";
        echo "</a><br />";
        }
    }
}
if ($metier_actuel == "COM") {
    echo "<h4>{$boutonTelechargerCom}</h4>";
    $requeteBoutonsComPDF = "SELECT * FROM fichiers WHERE langue_pays = '{$lang_sanstraitdunion}' AND metier = 'com' AND type = 'pdf';";
    $resultatBoutonsComPDF = $lien->query($requeteBoutonsComPDF);
    while($rang_BoutonsComPDF = $resultatBoutonsComPDF->fetch_assoc())
    {
        if (is_null($rang_BoutonsComPDF['visible'])) {
        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
            echo "<i class='icon-File-Download'></i> PDF ({$cvMiseajour})";
        echo "</a><br />";
        } else {
            if (preg_match('/^\d{5}$/', $rang_BoutonsComPDF['date'])) {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_comCV_{$lang_sanstraitdunion}_0{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            } else {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_comCV_{$lang_sanstraitdunion}_{$rang_BoutonsComPDF['date']}.pdf' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            }
            echo "<i class='icon-File-Download'></i> PDF ({$rang_BoutonsComPDF['taille']} {$rang_BoutonsComPDF['mesure']})";
        echo "</a><br />";
        }
    }
    $requeteBoutonsComDOCX = "SELECT * FROM fichiers WHERE langue_pays = '{$lang_sanstraitdunion}' AND metier = 'com' AND type = 'docx';";
    $resultatBoutonsComDOCX = $lien->query($requeteBoutonsComDOCX);
    while($rang_BoutonsComDOCX = $resultatBoutonsComDOCX->fetch_assoc())
    {
        if (is_null($rang_BoutonsComDOCX['visible'])) {
        echo "<a href='#'' class='btn btn-md btn-primary disabled' style='margin-bottom:20px;'>";
            echo "<i class='icon-File-Download'></i> DOCX ({$cvMiseajour})";
        echo "</a><br />";
        } else {
            if (preg_match('/^\d{5}$/', $rang_BoutonsComDOCX['date'])) {
                echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_comCV_{$lang_sanstraitdunion}_0{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            } else {
                    echo "<a href='cv_files/{$lang_actuelle}/{$nomFamille}_comCV_{$lang_sanstraitdunion}_{$rang_BoutonsComDOCX['date']}.docx' class='btn btn-md btn-primary' style='margin-bottom:20px;'>";
            }
            echo "<i class='icon-File-Download'></i> DOCX ({$rang_BoutonsComDOCX['taille']} {$rang_BoutonsComDOCX['mesure']})";
        echo "</a><br />";
        }
    }
}
?>