<?php

/* 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

// struttura URL: ?name=elena&mail=elena@gmail.com&age=24

// creo variabili dei parametri
$_GET["name"];
$_GET["mail"];
$_GET["age"];

var_dump($_GET["name"]);
var_dump($_GET["mail"]);
var_dump($_GET["age"]);

// Se name è più lungo di 3 caratteri
// Se mail contiene punto e @
// Se age è un numero

if(strlen($_GET["name"]) >= 3 && strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@") && is_numeric($_GET["age"])) {
    echo "Accesso riuscito";
}
// altrimenti
else {
    echo "Accesso negato";
}
?>