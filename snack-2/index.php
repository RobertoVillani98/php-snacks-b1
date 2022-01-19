<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!-- ?name=Roberto&mail=roberto.villani@gmail.com&age=23 -->

<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) < 4) {
    echo "Accesso negato! La lunghezza minima del nome deve essere di 4 caratteri";
} else if (strpos($mail, '.') == false || strpos($mail, '@') == false) {
    echo "Accesso negato! Email formattata male";
} else if (!is_numeric($age)) {
    echo "Accesso negato! L'età deve essere un numero";
} else {
    echo "Accesso riuscito!";
}

?>