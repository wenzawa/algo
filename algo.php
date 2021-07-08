<?php
/**
 * Method  sommeInterval
 * Il permet d'obtenir la somme d'intervale donnée
 * 
 * @param array $ts    -
 * @param int   $start -
 * @param int   $end   - 
 * 
 * @return int
 */
function sommeInterval(array $ts, int $start, int $end): int
{
    $card = sizeof($ts); // Taille du tableau 
    $somme = 0;
    $min = min($card - 1, $start);
    $max = max(0, $end);
    if (!is_array($ts) || 0 == $card) {
        return 0;
    }
    for ($i = $min; $max >= $i; $i++) {
        $somme = $somme + $ts[$i];
    }
    return $somme;
}
/**
 * Trouvez le plus petit intervalle (différence minimale) 
 * entre les nombres d'un tableau.
 * 
 * @param array $numbers - 
 * 
 * @return array $diff   - 
 */
function smallestInterval(array $numbers): int
{
    $length = count($numbers);
    sort($numbers);
    //  Valeur (sûre) maximale d’un nombre entier en PHP
    $diff = PHP_INT_MAX; //Falcultatif
    for ($i = 0; $i < $length - 1; $i++) {
        if ($numbers[$i + 1] - $numbers[$i] < $diff) {
            $diff = $numbers[$i + 1] - $numbers[$i];
        }
    }
    return $diff;
}
/**
 * Method valeurApprocheZero
 * 
 * @param array $ts - 
 * 
 * @return int
 */
function valeurApprocheZero(array $ts): int
{
    $card = sizeof($ts);
    $min = 0;

    for ($i = 0; $i < $card; $i++) {
        $j = $i;
        while ((abs($ts[$j]) <= abs($ts[$min])) && $j > 0) {
            if ((abs($ts[$j]) == abs($ts[$min])) && ($ts[$min] > $ts[$j])) {
                $min = $min;
            } else {
                $min = $j;
            }
            $j--;
        }
    }
    $res = (int) $ts[$min];
    if ($card == 0) {
        $res = 0;
    }
    return $res;
}
