<?php
function multiplieElemsTabPar2PassageParVal(array $tab){
    for($i=0;$i<count($tab);$i++){
        $tab[$i] = $tab[$i] * 2;
    }

}
function multiplieElemsTabPar2PassageParRef(array &$tab){
    for($i=0;$i<count($tab);$i++){
        $tab[$i] = $tab[$i] * 2;
    }

}
$tab = [1,2,3,4,5];
multiplieElemsTabPar2PassageParVal($tab);
echo implode(",",$tab);
echo "\n";
multiplieElemsTabPar2PassageParRef($tab);
echo implode(",",$tab);
echo "\n";

function sommeTypee(int $a, int $b):int{
    return $a + $b;
}

echo "Somme Typée : " . sommeTypee(1,2);
echo "\n";

function sommeNonTypee($a, $b){
    return "Somme Non Typee : " . strval($a+$b);
}


echo sommeNonTypee(5,6);

