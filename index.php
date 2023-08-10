<?php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

$titulaire1 = new Titulaire("Beckham", "David", "2000-01-01", "Londres");
$titulaire2 = new Titulaire("Wick", "John", '1900-02-02', "Continental");

echo $titulaire1;
echo $titulaire2;

$compte1 = new CompteBancaire(" compte courant ", 300, " euro ", $titulaire1);
$compte2 = new CompteBancaire(" livret A ", 1202542, " euros ", $titulaire2 );

echo $compte1->afficherInfos();
echo $compte2->afficherInfos();

?>