<?php
require_once 'animal.php';
$sheep = new Animal("shaun", 2, "false");

echo $sheep->get_name();
echo "\n";
echo $sheep->get_legs();
echo "\n";
echo $sheep->get_could_blooded();
echo "\n \n";

$ape = new Ape('kerasakti', 2, false);
echo $ape->get_name();
echo "\n";
echo $ape->get_legs();
echo "\n";
echo $ape->get_yell();
echo "\n \n";

$frog = new Frog("buduk", 4, false);
echo $frog->get_name();
echo "\n";
echo $frog->get_legs();
echo "\n";
echo $frog->get_jump();
echo "\n \n";
