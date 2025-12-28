<?php
// Exercice 7 : Manipulation des Dates
// Objectif : Maîtriser les fonctions de date et heure

echo "<h1>Exercice 7 : Les Dates</h1>";

// TODO 1 : Définissez le fuseau horaire sur Europe/Paris
// date_default_timezone_set("Europe/Paris");


// ============================================
// AFFICHAGE DE DATES
// ============================================
echo "<h2>Date et heure actuelles</h2>";

// TODO 2 : Affichez la date au format JJ/MM/AAAA
// echo "Date : " . date("d/m/Y") . "<br>";


// TODO 3 : Affichez l'heure au format HH:MM:SS


// TODO 4 : Affichez la date complète (ex: "Lundi 25 Décembre 2024")
// Indice : utilisez les formats l, d, F, Y


// ============================================
// MANIPULATION DE DATES
// ============================================
echo "<h2>Manipulation de dates</h2>";

// TODO 5 : Créez une date spécifique (votre date de naissance) avec strtotime()
// $dateNaissance = strtotime("2000-01-15");
// echo "Date de naissance : " . date("d/m/Y", $dateNaissance) . "<br>";


// TODO 6 : Calculez votre âge en années
// Indice : (time() - $dateNaissance) / (365 * 24 * 60 * 60)


// TODO 7 : Calculez le nombre de jours avant Noël prochain
// $noel = strtotime("2024-12-25");


// ============================================
// BONUS : JOURS EN FRANÇAIS
// ============================================
echo "<h2>Bonus : Jours en français</h2>";

$jours_fr = [
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche"
];

// TODO 8 : Utilisez le tableau pour afficher le jour actuel en français
// $jour_en = date("l");
// $jour_fr = $jours_fr[$jour_en];


?>

