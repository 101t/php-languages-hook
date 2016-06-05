<?php 
include_once(dirname(__FILE__)."/lang/class.lang.php");
$default_lang = "tr";
session_start();
header('Cache-control: private'); // IE 6 FIX
if(isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}
if (isset($_SESSION['lang'])) 
    $translate = new Translator($_SESSION['lang']);
else
    $translate = new Translator($default_lang);
?>