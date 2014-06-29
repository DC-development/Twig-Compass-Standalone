<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once './vendor/autoload.php';
require_once './mockup_objects/data.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './templates/_temp',
    'debug' => true
));

if(isset($_GET['p'])) {
    $page = $_GET['p'];
}else{
    $page = "forms";
}

echo $twig->render("$page.html.twig", array(
    'sliderData' => $sliderData,
    'tabData' => $tabData
));