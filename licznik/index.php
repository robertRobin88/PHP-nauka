<?php
header('Content-type: text/plain');
echo "LICZNIK \n";
function licznik() {
    $filename = "licznik.txt";
    if(!is_file($filename)) {
        file_put_contents($filename, "1");
        return "1";
    } else {
        $file = fopen($filename, "r+");

        if(flock($file, LOCK_EX)){ //zablokuj plik
            //odczyt pliku 
            $counter = (int)fread($file, filesize($filename));
            $counter++;
            fseek($file, 0); //Ustaw wskażnik pliku na początek
            fwrite($file, $counter); //Zapisz nowa wartosć
            flock($file, LOCK_UN); //Zwolnij blokadę
        }
        fclose($file); //zamknij plik
        return $counter;
    }
}

print "Jesteś ".licznik(). " gościem na stronie";
?>