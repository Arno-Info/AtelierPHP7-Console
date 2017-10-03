<?php
/**
 * Calcule la factorielle du parametre $n
 * @param int $n le nombre dont on calcule la factorielle
 * @return int la factorielle
 */

//Ecrire une fonction qui renvoie la factorielle d'un nombre.

//La factorielle de 3 est  3x2x1
function  factorielle(int $n):int{
    if ( $n<=0 )
       return 1;
       
    return $n * factorielle($n-1);
}
    
printf("Factorielle de %d = %d\n", 15, factorielle(15));