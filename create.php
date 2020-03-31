<?php 

require_once('functions.php');

$igra = [
    'id' => uniqid(),
    'ime' => $_POST["ime"],
    'slika' => $_POST["slika"],
    'opis' => $_POST["opis"],
    'datum' => $_POST["datum"],
    'ocjena' => $_POST["ocjena"],   
];

saveToFile('igre.txt', $igra);

header('Location: index.php');
