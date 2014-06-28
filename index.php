<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './templates/_temp',
    'debug' => true
));

echo $twig->render('index.html.twig', array('name' => 'Fabien, my friend'));