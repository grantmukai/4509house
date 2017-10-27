<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
 
if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en-US';
}
 
switch ($lang) {
  case 'fr-CA':
  $lang_actuelle = 'fr-CA';
  $lang_sanstraitdunion = 'frCA';
  break;

  case 'en-US':
  $lang_actuelle = 'en-US';
  $lang_sanstraitdunion = 'enUS';
  break;

  case 'en-CA':
  $lang_actuelle = 'en-CA';
  $lang_sanstraitdunion = 'enCA';
  break;

  case 'es-MX':
  $lang_actuelle = 'es-MX';
  $lang_sanstraitdunion = 'esMX';
  break;

  case 'fr-FR':
  $lang_actuelle = 'fr-FR';
  $lang_sanstraitdunion = 'frFR';
  break;

  case 'es-PR':
  $lang_actuelle = 'es-PR';
  $lang_sanstraitdunion = 'esPR';
  break;

  case 'fr-CH':
  $lang_actuelle = 'fr-CH';
  $lang_sanstraitdunion = 'frCH';
  break;

  case 'es-ES':
  $lang_actuelle = 'es-ES';
  $lang_sanstraitdunion = 'esES';
  break;
  
  case 'fr-BE':
  $lang_actuelle = 'fr-BE';
  $lang_sanstraitdunion = 'frBE';
  break;

  case 'es-CL':
  $lang_actuelle = 'es-CL';
  $lang_sanstraitdunion = 'esCL';
  break;

  case 'es-UY':
  $lang_actuelle = 'es-UY';
  $lang_sanstraitdunion = 'esUY';
  break;
   
  default:
  $lang_actuelle = 'en-US';
  $lang_sanstraitdunion = 'en-US';
 
}

// Web ou Com
if(isSet($_GET['metier']))
{
$metier = $_GET['metier'];
 
// enregistrer la session et régler la cookie
$_SESSION['metier'] = $metier;
 
setcookie('metier', $metier, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['metier']))
{
$metier = $_SESSION['metier'];
}
else if(isSet($_COOKIE['metier']))
{
$metier = $_COOKIE['metier'];
}
else
{
$metier = 'web';
}
 
switch ($metier) {
  case 'web':
  $metier_actuel = 'WEB';
  break;

  case 'com':
  $metier_actuel = 'COM';
  break;
   
  default:
  $metier_actuel = 'WEB';
 
}
?>