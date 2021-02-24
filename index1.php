<?php //tablice dwuwymiarowe
header('Content-type: text/plain');

$klasa_1a = [
    ['imie' => "Adam", 'ocena' => 4.5],
    ['imie' => "Marek", 'ocena' => 5],
    ['imie' => "Jola", 'ocena' => 5],
    ['imie' => "Robert", 'ocena' => 4],
    ['imie' => "Kasia", 'ocena' => 4],
];

$klasa_2a = [
    ['imie' => "Kasia", 'ocena' => 5],
    ['imie' => "Rafał", 'ocena' => 3],
    ['imie' => "Jola", 'ocena' => 6],
    ['imie' => "Robert", 'ocena' => 2.5],
    ['imie' => "Jasio", 'ocena' => 5],
];

$klasy = ['1a' => $klasa_1a, '1b' => $klasa_2a];


foreach ($klasy as $e => $klasa){
    print_r($klasa);
    print "Klasa: ".$e."\n".
    "------------------\n".
    "Imię\tOcena\n".
    "------------------\n";
    foreach($klasa as $k){
        printf("%s\t%s\n", $k['imie'], $k['ocena']);
    }
    print "------------\n";
    $oceny =array_column($klasa, 'ocena');
    $srednia = array_sum($oceny) / count($oceny);
    printf("Srednia\t%.2f\n\n", $srednia);
}
$imiona =[];
$imiona = array_merge($klasa_1a, $klasa_2a); //łaczymy tabele

$imiona = array_column($imiona, 'imie'); //wyodrębiamy kolumnę z imionami

$imiona = array_unique($imiona); // usuwamy powtarzajace sie imiona



sort ($imiona);


print "Dzieci mają następujące imiona:\n";
foreach($imiona as $k => $imie){
    print $imie.", ";
} 




?>