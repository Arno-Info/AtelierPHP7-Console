<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//La variable sera global aux blocs mais pas a la fonction.

global $a;
function define123(){
    $a ="123";
}
define123();
$a = "abc";
echo $a;

//************************************************

echo "\n";
echo "------------------------------------------";
echo "\n";

//************************************************



//La variable sera global a l'ensemble des blocs et fonctions.

function defineabc(){
    global $a;
    $a ="ABC";
}
defineabc();
$a = "123";
echo $a;