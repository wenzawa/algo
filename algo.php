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

/**
 * Method is_win
 * Il permet d'ecrire le jumeau(twin) d'un est un mot écrit avec exactement mêmes 
 * lettres (indépendamment de la casse)
 * 
 * @param string $x - 
 * @param string $y -
 * 
 * @return bool
 */
function Is_win(string $x, string $y)
{

    strtolower($x); // Convertir en minuscule
    strtolower($y); // Convertir en minuscule
    $cardX = mb_strlen($x);
    $cardY = mb_strlen($y);
    $arrX  = str_split(trim($x)); // Transformation un string en Tableau
    $arrY  = str_split(trim($y)); // Transformation un string en Tableau

    $bool  = false;
    $i = 0;

    while ($cardX === $cardY && $cardX > $i) {
        for ($j = 0; $cardY > $j; $j++) {
            $bool =  ($arrX[$i] === $arrY[$j]) ? true : false;
        }
        $i++;
    }
    return $bool;
}
echo Is_win("marion", "romain") . "\n";
