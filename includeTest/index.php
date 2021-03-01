<?php
// header('Content-type: text/plain');

include_once("function.php");
include("../licznik/index.php");

$numer = "SZY 66654";
$woj = rejestracja_pojazdu($numer);
echo "\n\n";

if($woj) {
    print "Rejestracja pojazdu $numer to województwo $woj";
} else {
    print "Wpisz poprawny numer rejestracyjny";
}

// print "Jesteś ".licznik()." na stronie";

?>