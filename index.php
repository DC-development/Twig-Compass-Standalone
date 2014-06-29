<?php

require_once './vendor/autoload.php';

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

echo $twig->render("$page.html.twig", array('name' => 'Fabien, my friend'));