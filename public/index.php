<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Eddy';
$name2 = 'Vincent';

echo $twig->render('home.html.twig', ['name' => $name, 'name2' => $name2]);


