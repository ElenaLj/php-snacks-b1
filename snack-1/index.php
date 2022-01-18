<?php

/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

// creo array multidimensionale delle partite
$partite = [
    // creo array singola partita
    [
        "squadraCasa" => "Pallacanestro Brescia",
        "puntiCasa" => "98",
        "squadraOspite" => "Pallacanestro Pavia",
        "puntiOspite" => "88"
    ],
    [
        "squadraCasa" => "Basket Club Ferrara",
        "puntiCasa" => "68",
        "squadraOspite" => "Stella Azzurra Roma",
        "puntiOspite" => "70"
    ],
    [
        "squadraCasa" => "Pallacanestro Treviso",
        "puntiCasa" => "93",
        "squadraOspite" => "Victoria Libertas Pesaro",
        "puntiOspite" => "76"
    ],
    [
        "squadraCasa" => "Pallacanestro Varese",
        "puntiCasa" => "87",
        "squadraOspite" => "Fortitudo Pallacanestro Bologna",
        "puntiOspite" => "74"
    ]
];

//verifico contenuto della struttura dati
echo "<pre> STRUTTURA DEI DATI <br>";
var_dump($partite);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Pallacanestro</title>
</head>
<body>
    <h2>Risultati delle partite di pallacanestro:</h2>
    <ul>
        <?php
            for($i = 0; $i < count($partite); $i++){
                echo "<li>" . $partite[$i]["squadraCasa"] . " " . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . " - " . $partite[$i]["puntiOspite"];
            }
        ?>
    </ul>
</body>
</html>