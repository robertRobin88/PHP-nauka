<?php 
header('Content-type: text/plain');

$string = file_get_contents("klasa_1a_txt.json");
if ($string === false) {
}
$json_a = json_decode($string, true);
if ($json_a === null) {
}

foreach ($json_a as $person_name => $person_a) {
    print "Klasa :".$person_name."\n";
    foreach($person_a as $zmiana => $g){
        printf("%s\t%s\n",$g['imie'],$g['ocena']);
    // foreach($person_a as $k){
    //     printf("%s\t%s\n", $k['imie'], $k['ocena']);
    // }
    // }
   
    }
}


?>