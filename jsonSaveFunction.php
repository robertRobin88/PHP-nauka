<?php 
header('Content-type: text/plain');

$contactList = [
    "Home" => [
        ["name" => "Jonas", "id" => "x1564"],
        ["name" => "Kate", "id" => "x1264"],
        ["name" => "Michael", "id" => "x7634"],
        ["name" => "Ken", "id" => "x1277"],

    ],
    "Office" => [
        ["name" => "Boss", "id" => "x1564"],
        ["name" => "Manager", "id" => "x1264"],
        ["name" => "Manag", "id" => "x7634"],
        ["name" => "Office", "id" => "x1277"],
    ]
];

foreach($contactList as $place => $person){
    print $place;
    print "\n";
    print"-------------\n";
    
    foreach($person as $n){
        printf("%s\t%s\n", $n["name"], $n["id"]);
    }
};
$json = json_encode( $contactList);

if (file_put_contents("contactList.json", $json)){
    echo "Zapisano plik";
} else {
    echo "Błąd zapisu";
};



?>
