<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
//aonde encontrar x, mude para y
$slug->addRule("i", "ey");

//mostrar a funcao e separar com _
echo $slug->slugify("Teste com acentuação!","_"); // hello-world