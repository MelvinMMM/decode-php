<?php

echo "Hello world";

$a = 2;
$b = "a";

echo $$b;
echo "Je suis {$b}";

$list = [1,2,5,10,5,15,1,3];
$assoc = array_flip($list);
var_dump($assoc);
$uniqList = array_flip($assoc);
var_dump($uniqList);

$array1 = [1,2];
$array2 = [2,3,4];

var_dump($array1 + $array2);

$arrayAssoc1 = ["nb" => 1,"nb2" => 2];
$arrayAssoc2 = ["nb" => 2,"nb3" => 3,"nb4" => 4];

var_dump($arrayAssoc1 + $arrayAssoc2);


$a = 10;

if ($a < 5) {
    echo "F";
} elseif ($a < 10) {
    echo "C";
} elseif ($a < 15) {
    echo "A";
} elseif ($a <= 20) {
    echo "S";
}
$a = 9;

switch ($a) {
    case 1:
        echo "F";
        break;
    case 2:
        echo "F";
        break;
    case 3:
        echo "F";
        break;
    case 4:
        echo "F";
        break;
    case 5:
        echo "F";
        break;
    case 6:
        $a = $a + 1;
        // no break
    case 7:
    case 8:
    case 9:
    case 10:
        echo "C";
        echo $a;
        break;
    case 15:
        echo "A";
        break;
    case 20:
        echo "S";
        // no break
    default:
        echo "{$a} not managed";
}


$companies = [
            [
                "denomination" => "Decode",
                "contacts" => [
                    [
                        "firstname" => "Jean",
                        "lastname" => "Dupond"
                    ],
                    [
                        "firstname" => "Jeanne",
                        "lastname" => "Dupond"
                    ],
                ]
                ],
            [
                "denomination" => "Apple",
                "contacts" => [
                    [
                        "firstname" => "Tim",
                        "lastname" => "Cook"
                    ],
                    [
                        "firstname" => "Steve",
                        "lastname" => "Jobs"
                    ],
                ]
            ]
        ];

$filterLastname = "Jobs";
foreach ($companies as $company) {
    foreach ($company['contacts'] as $contact) {
        if ($contact['lastname'] === $filterLastname) {
            break 2;
        }
    }
}
echo "Company: {$company["denomination"]} - {$contact["lastname"]} {$contact["firstname"]}";
