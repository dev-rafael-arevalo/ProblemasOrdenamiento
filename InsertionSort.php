<?php

/**
 * Ordena una lista de nombres en orden alfabético utilizando Insertion Sort.
 * 
 * @param array $list Lista de nombres a ordenar.
 * @return array Lista ordenada alfabéticamente.
 */
function insertionSort(array $list): array
{
    for ($i = 1; $i < count($list); $i++) {
        $key = $list[$i];
        $j = $i - 1;

        // Comparación y desplazamiento de elementos
        while ($j >= 0 && strtolower($list[$j]) > strtolower($key)) {
            $list[$j + 1] = $list[$j];
            $j--;
        }

        $list[$j + 1] = $key;
    }
    return $list;
}

// Ejemplo de uso
$list = ["Maria", "Carlos", "Ana", "Jose", "Luis"];
echo "Lista original: " . implode(", ", $list) . PHP_EOL;
$sortedList = insertionSort($list);
echo "Lista ordenada: " . implode(", ", $sortedList) . PHP_EOL;

?>
