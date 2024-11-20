<?php

/**
 * Ordena una lista de palabras alfabéticamente utilizando Merge Sort.
 * 
 * @param array $list Lista de palabras a ordenar.
 * @return array Lista ordenada alfabéticamente.
 */
function mergeSort(array $list): array
{
    if (count($list) <= 1) {
        return $list;
    }

    $middle = floor(count($list) / 2);
    $left = mergeSort(array_slice($list, 0, $middle));
    $right = mergeSort(array_slice($list, $middle));

    return merge($left, $right);
}

/**
 * Fusiona dos listas ordenadas en una sola lista ordenada.
 * 
 * @param array $left Lista izquierda.
 * @param array $right Lista derecha.
 * @return array Lista fusionada y ordenada.
 */
function merge(array $left, array $right): array
{
    $result = [];
    while (!empty($left) && !empty($right)) {
        if (strtolower($left[0]) <= strtolower($right[0])) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Ejemplo de uso
$list = ["Zebra", "apple", "Orange", "banana", "kiwi"];
echo "Lista original: " . implode(", ", $list) . PHP_EOL;
$sortedList = mergeSort($list);
echo "Lista ordenada: " . implode(", ", $sortedList) . PHP_EOL;

?>
