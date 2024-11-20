<?php

/**
 * Ordena una lista de números en orden descendente utilizando Bubble Sort.
 * 
 * @param array $list Lista de números a ordenar.
 * @return array Lista ordenada en orden descendente.
 */
function bubbleSortDescending(array $list): array
{
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($list[$j] < $list[$j + 1]) {
                // Intercambio de elementos
                [$list[$j], $list[$j + 1]] = [$list[$j + 1], $list[$j]];
            }
        }
    }
    return $list;
}

// Ejemplo de uso
$list = [5, -2, 9, 1, 5, 6, -3];
echo "Lista original: " . implode(", ", $list) . PHP_EOL;
$sortedList = bubbleSortDescending($list);
echo "Lista ordenada: " . implode(", ", $sortedList) . PHP_EOL;

?>
