function sredniaArytmetyczna($lista) {
    $suma = array_sum($lista);
    $liczbaElementow = count($lista);
    
    if ($liczbaElementow == 0) {
        return NULL; // Jeśli lista jest pusta, zwróć NULL
    } else {
        return $suma / $liczbaElementow;
    }
}

// Przykładowe użycie funkcji
$liczby = array(1, 2, 3, 4, 5);
echo "Średnia arytmetyczna: " . sredniaArytmetyczna($liczby);

function sredniaWazona($wartosci, $wagi) {
    if (count($wartosci) != count($wagi)) {
        return NULL; // Jeśli długość tablic wartości i wag jest różna, zwróć NULL
    }
    
    $suma = 0;
    $sumaWag = 0;
    
    for ($i = 0; $i < count($wartosci); $i++) {
        $suma += $wartosci[$i] * $wagi[$i];
        $sumaWag += $wagi[$i];
    }
    
    if ($sumaWag == 0) {
        return NULL; // Jeśli suma wag wynosi 0, zwróć NULL, aby uniknąć dzielenia przez zero
    } else {
        return $suma / $sumaWag;
    }
}

// Przykładowe użycie funkcji
$wartosci = array(1, 2, 3, 4, 5);
$wagi = array(0.1, 0.2, 0.3, 0.2, 0.2); // Suma wag powinna wynosić 1
echo "Średnia ważona: " . sredniaWazona($wartosci, $wagi);

​
