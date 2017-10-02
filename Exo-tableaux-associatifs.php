<?php

//TABLEAUX DES PAYS
$tab = array();
$tab["JAMAIQUE"]="Kingston";
$tab["CUBA"]="La Havane";
$tab["MADAGASCAR"]="Antananarivo";

//Trouver la capitale de la JAMAIQUE
printf("La capitale de la JAMAIQUE est %s\n", $tab["JAMAIQUE"]);
        
//Afficher sans faire de boucle, la liste des pays par ordre alphabetique.
$pays= array_keys($tab);
sort($pays);
printf("Liste des pays ordre alphabetique : %s\n", implode(",",$pays));

$capitales=array_values($tab);
sort($capitales);
printf("Liste des capitales ordre alphabetique : %s\n", implode(",",$capitales));