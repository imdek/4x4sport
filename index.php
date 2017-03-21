<?php

$DOMAIN=$_SERVER['SERVER_NAME'];

//if (substr($DOMAIN,0,2) =="lo") $DOMAIN="http://localhost/4x4sport.info";
//$DOMAIN="http://localhost/4x4sport.info/";
//$DOMAIN="http://imdek.de/4x4sport.info/";

$sites = array(
    "en" => "en-landing.html",
    "de" => "de-landing.html",
	"ru" => "ru-landing.html",
	"uk" => "uk-landing.html",
);
//echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if (!in_array($lang, array_keys($sites))){
    $lang = 'en';
}
header('Location: ' . $sites[$lang]);

?>