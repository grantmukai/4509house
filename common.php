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
   
  default:
  $lang_actuelle = 'fr-CA';
 
}
?>