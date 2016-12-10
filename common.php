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
$lang = 'fr-CA';
}
 
switch ($lang) {
  case 'fr-CA':
  $lang_actuelle = 'fr-CA';
  $lang_sanstraitdunion = 'frCA';
  break;

  case 'en-US':
  $lang_actuelle = 'en-US';
  break;

  case 'en-CA':
  $lang_actuelle = 'en-CA';
  break;

  case 'es-MX':
  $lang_actuelle = 'es-MX';
  break;

  case 'fr-FR':
  $lang_actuelle = 'fr-FR';
  break;

  case 'es-PR':
  $lang_actuelle = 'es-PR';
  break;

  case 'fr-CH':
  $lang_actuelle = 'fr-CH';
  break;

  case 'es-ES':
  $lang_actuelle = 'es-ES';
  break;
  
  case 'fr-BE':
  $lang_actuelle = 'fr-BE';
  break;

  case 'es-CL':
  $lang_actuelle = 'es-CL';
  break;

  case 'es-UY':
  $lang_actuelle = 'es-UY';
  break;
   
  default:
  $lang_actuelle = 'fr-CA';
 
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