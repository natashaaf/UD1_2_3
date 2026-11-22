<?php

/**
 * @param array $numeros indica los numeros recogidos en el array
 * @return int indica la suma de los num > que 10
 */
function sumarMayoresQueDiez(array $numeros): int {
    $suma = 0;
    foreach($numeros as $numero){
        if($numero > 10){
            $suma += $numero;

        }
    }
    return $suma;
}