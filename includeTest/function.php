<?php 

function rejestracja_pojazdu($numer = ''){

    $rej = [
        "B" => "podlaskie",
        "C" => "kujawsko-pomorskie",
        "D" => "dolnośląskie",
        "E" => "łódzkie",
        "F" => "lubuskie",
        "G" => "pomorskie",
        "K" => "małopolskie",
        "L" => "lubelskie",
        "N" => "warmińsko-mazurskie",
        "O" => "opolskie",
        "P" => "wielkopolskie",
        "R" => "podkarpackie",
        "S" => "śląskie",
        "T" => "świetokrzyskie",
        "W" => "mazowieckie",
        "Z" => "zachodniopomorskie"
    ];

    $powiat = [
        "Z" => "Żywiecki",
        "B" => "Bielski"
    ];
    
    //pobranie pierwszego znaku z numeru i zamiana na wielką literę
    //mb_substr(gdzie, od której liczby (start od 0), ile znaków)
    $prefiks = mb_strtoupper(mb_substr($numer, 0, 1));
    $pow = mb_strtoupper(mb_substr($numer, 1, 1));


    return isset($rej[$prefiks]) ? $rej[$prefiks]." powiat ".$powiat[$pow] : false;
}

?>