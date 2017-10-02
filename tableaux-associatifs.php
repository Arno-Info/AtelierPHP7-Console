<?php

//Tableaux associatifs = Dictionnaire de données
$tab = array();
$tab["php"]="Langage de Script WEB";
$tab["java"]="Langage compilé avec machine virtuelle";
$tab["vb.net"]="Langage compilé avec machine virtuelle créé par Microsoft";

echo $tab["php"];

//OU

$tab1 = ["php"=>"Langage de Script WEB", "java"=>"Langage compilé avec machine virtuelle", "vb.net"=>"Langage compilé avec machine virtuelle créé par Microsoft" ];
echo "\n";
echo $tab1["php"];

//array_key_exist sert a afficher les clé qui existent
array_key_exists($tab1, $tab);
