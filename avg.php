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
​
