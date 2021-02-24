
<?php 
header('Content-type: text/plain');
$kontakt = [];

$kontakt['imie'] = "Adam";
$kontakt['nazwisko'] = "Kowalski";
$kontakt['telefon'] = 123456789;


$kontakty = [];

array_push($kontakty, $kontakt);



$kontakt['imie'] = "Ewa";
$kontakt['nazwisko'] = "Kokololko";
$kontakt['telefon'] = 123789456;

$kontakty[] = $kontakt;

print_r($kontakty);

print "\n\r";
printf("Imie pierwszego kontaktu to : %s\n\r", $kontakty[0]['imie']);

print "\nLista kontaktów:\n" ;

$e = count($kontakty);
for ($i = 0; $i < $e; $i++){
    printf("%s\t%s\ttel.%s\n", $kontakty[$i]['imie'], $kontakty[$i]['nazwisko'], $kontakty[$i]['telefon']);
}

?>
