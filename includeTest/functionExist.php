<?php

include_once("function.php");
//Sprawdzenie czy funkcja istnieje
if(function_exists("rectangle")){
    $a = 12;
    $b = 43;

    printf("Obwód prostokąta  o bokach %d i %d wynosi %d", $a, $b, $rect);
} else {
    print "Dołacz kod funkcji do swojego programu";
}


?>