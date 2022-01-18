<?php

/* 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

// struttura URL: ?name=elena&mail=elena@gmail.com&age=24

// creo variabili dei parametri
$userName = $_GET["name"];
$userMail = $_GET["mail"];
$userAge = $_GET["age"];


// stampo a schermo i parametri
var_dump($_GET["name"]);
var_dump($_GET["mail"]);
var_dump($_GET["age"]);


// variabili email
$fullStop = ".";
$at = "@";

// Se name è più lungo di 3 caratteri
// Se mail contiene punto e @
// Se age è un numero

if(strlen($userName) >= 3 && strpos($userMail, $fullStop) && strpos($userMail, $at) && is_numeric($userAge)) {
    echo "Accesso riuscito";
}
// altrimenti
else {
    echo "Accesso negato";
}
?>