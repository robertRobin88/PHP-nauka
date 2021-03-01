<?php 
header("Content-type: text/plain");
//Dodanie treści do pliku /uproszczona metoda
file_put_contents("text.txt", "Jakiś tekst\n", FILE_APPEND | LOCK_EX);
//wyświetlanie pobranego pliku
print file_get_contents("text.txt");

?>