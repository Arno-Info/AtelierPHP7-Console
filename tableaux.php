<?php
//Tableau A
$a=array();
$a[] = 1;
$a[] = 2;
$a[] = 1;
$a[] = 3;
$a[] = 4;
$a[] = 4;
$a[] = 5;

//Tableau B
$b=array();
$b[]=3;
$b[]=4;
$b[]=4;
$b[]=5;
$b[]=6;
$b[]=7;
$b[]=7;

//Afficher les valeur contenues dans les tableaux
echo "Tableau A : " . implode (",",$a);
echo "\n";
echo "Tableau B : " . implode (",",$b);

//Somme du tableau A
$c = array_merge($a);

//Somme du Tableau B
$d = array_merge($b);

//Interserction des deux tableaux
$e = array_intersect($b, $a);
$f = array_diff($b, $a);
sort($a);
echo "\n";
echo "Intersection des 2 Tableaux A & B : " . implode(",",$e);
echo "\n";
echo "Différence entre les 2 Tableaux A & B : " . implode(",",$f);
echo "\n";
//echo "Tableau A : " . implode (",",$a);

