/**
 * Method  sommeInterval
 * Il permet d'obtenir la somme d'intervale donnée
 * 
 * @param {object} ts    -
 * @param {number} start -
 * @param {number} end   - 
 * 
 * @return int
 */
function sommeInterval(ts, start, end)
{
    let card = ts.length ; // Taille du tableau 
    let somme = 0;
    let min = Math.min(card - 1, start);
    let max = Math.max(0, end);

    if (0 == card) return 0;

    for (let i = min; max >= i; i++) {
        somme = somme + ts[i];
    }
    return somme;
}
/**
 * Trouvez le plus petit intervalle (différence minimale) 
 * entre les nombres d'un tableau.
 * 
 * @param {object} numbers - 
 * 
 * @return {number} diff   - 
 */
function smallestInterval(numbers)
{
    let length = numbers.length;
    numbers.sort();
    // Valeur (sûre) maximale d’un nombre entier en JavaScript.
    let diff = Number.MAX_SAFE_INTEGER; //Falcultatif 
    for (let i = 0; i < length - 1; i++) {
        if (numbers[i + 1] - numbers[i] < diff) {
            diff = numbers[i + 1] - numbers[i];
        }
    }
    return diff;
}
/**
 * Method valeurApprocheZero
 * 
 * @param {array} ts - 
 * 
 * @return {number}
 */
 function valeurApprocheZero(ts)
{
    let card = ts.length;
    let min = 0;

    for (let i = 0; i < card; i++) {
        j = i;
        while ((Math.abs(ts[j]) <= Math.abs(ts[min])) && j > 0) {
            if ((Math.abs(ts[j]) == Math.abs(ts[min])) && (ts[min] > ts[j])) {
                min = min;
            } else {
                min = j;
            }
            j--;
        }
    }
    res = parseInt(ts[min]);
    if (card == 0) {
        res = 0;
    }
    return res;
}