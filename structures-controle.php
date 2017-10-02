<?php

echo "\n";
echo "--------------------   IF    ----------------------";
echo "\n";

//Exemple de IF
//SI $a inferieur a 1 ET $b superieura 2 OU $c est égale à 3
//if($a<1 && $b>2 || $c==3);

$a = 1;
$b = 1;

if($a>$b){
    echo "$a > $b";
} elseif ($a<$b) {
    echo "$a < $b";
} else {
    echo "$a == $b";
}

echo "\n";
echo "-------------------  SWITCH  -----------------------";
echo "\n";

//Switch
$pays = "jamaique";
switch($pays){
    case "cuba";
        echo "La Havane";
        break;
    case "jamaique";
        echo "Kingston";
        break;
    default:
        echo "Antananarivo";
        break;
}

echo "\n";
echo "-------------------  FOR  -----------------------";
echo "\n";

//Boucle for traditionnel
$tab = [];  //ou array();
for ($i=0;$i<10;$i++){
    $tab[] = $i * 10;
}
printf("Tab : %s\n", implode(",",$tab));

//Boucle for americain
foreach ($tab as $valAct) {
    printf("%s,", $valAct);
}
echo "\n";
echo "-------------------  WHILE  -----------------------"; //TANT QUE
echo "\n";

//While (précondition)
$a=0;
while($a<10){
    $a++;
}
echo "$a";
//Do While (postcondition)
$a=0;
do{
    $a++;
}while($a<10);
echo "\n";
echo "$a";