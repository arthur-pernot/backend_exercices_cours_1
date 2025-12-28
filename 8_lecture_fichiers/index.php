<?php
// Exercice 8 : Lecture de Fichiers
// Objectif : Ouvrir, lire et fermer des fichiers

echo "<h1>Exercice 8 : Lecture de Fichiers</h1>";

$fichier = "data.txt";

// ============================================
// MÉTHODE 1 : LECTURE AVEC FOPEN/FGETS/FCLOSE
// ============================================
echo "<h2>Méthode 1 : fopen/fgets/fclose</h2>";

// TODO 1 : Vérifiez si le fichier existe avec file_exists()
// if (file_exists($fichier)) { ... } else { ... }


// TODO 2 : Ouvrez le fichier en mode lecture
// $handle = fopen($fichier, "r");


// TODO 3 : Lisez le fichier ligne par ligne avec une boucle while
// while (!feof($handle)) {
//     $ligne = fgets($handle);
//     echo $ligne . "<br>";
// }


// TODO 4 : Fermez le fichier
// fclose($handle);


// ============================================
// MÉTHODE 2 : LECTURE SIMPLE AVEC FILE_GET_CONTENTS
// ============================================
echo "<h2>Méthode 2 : file_get_contents</h2>";

// TODO 5 : Lisez tout le fichier d'un coup
// $contenu = file_get_contents($fichier);
// echo nl2br($contenu); // nl2br convertit les \n en <br>


// ============================================
// MÉTHODE 3 : LECTURE DANS UN TABLEAU AVEC FILE
// ============================================
echo "<h2>Méthode 3 : file()</h2>";

// TODO 6 : Lisez le fichier dans un tableau (une ligne = un élément)
// $lignes = file($fichier);
// foreach ($lignes as $numero => $ligne) {
//     echo "Ligne " . ($numero + 1) . " : " . $ligne . "<br>";
// }


// ============================================
// BONUS : COMPTAGE
// ============================================
echo "<h2>Bonus : Statistiques du fichier</h2>";

// TODO 7 : Affichez le nombre de lignes du fichier


// TODO 8 : Affichez le nombre de caractères du fichier


?>

