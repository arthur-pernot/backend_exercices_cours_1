<?php
// Exercice 9 : Écriture dans des Fichiers
// Objectif : Créer et écrire dans des fichiers

echo "<h1>Exercice 9 : Écriture de Fichiers</h1>";

// ============================================
// MÉTHODE 1 : ÉCRITURE AVEC FOPEN/FWRITE/FCLOSE
// ============================================
echo "<h2>Méthode 1 : fopen/fwrite/fclose</h2>";

$fichier = "journal.txt";

// TODO 1 : Ouvrez (ou créez) le fichier en mode écriture
// $handle = fopen($fichier, "w");


// TODO 2 : Écrivez plusieurs lignes dans le fichier
// fwrite($handle, "Première ligne\n");
// fwrite($handle, "Deuxième ligne\n");


// TODO 3 : Fermez le fichier
// fclose($handle);

// echo "Fichier créé avec succès !<br>";


// ============================================
// MÉTHODE 2 : AJOUT À LA FIN DU FICHIER
// ============================================
echo "<h2>Méthode 2 : Ajout (append)</h2>";

// TODO 4 : Ouvrez le fichier en mode ajout ('a')
// $handle = fopen($fichier, "a");


// TODO 5 : Ajoutez une nouvelle ligne avec la date actuelle
// $date = date("d/m/Y H:i:s");
// fwrite($handle, "Visite le : " . $date . "\n");


// TODO 6 : Fermez le fichier
// fclose($handle);


// ============================================
// MÉTHODE 3 : FILE_PUT_CONTENTS (SIMPLE)
// ============================================
echo "<h2>Méthode 3 : file_put_contents</h2>";

// TODO 7 : Créez un fichier simple.txt avec du contenu
// file_put_contents("simple.txt", "Contenu du fichier");


// TODO 8 : Ajoutez du contenu à la fin avec FILE_APPEND
// file_put_contents("simple.txt", "\nNouvelle ligne", FILE_APPEND);


// ============================================
// MINI-PROJET : SYSTÈME DE LOG
// ============================================
echo "<h2>Mini-projet : Système de log</h2>";

$fichierLog = "visites.log";

// TODO 9 : À chaque chargement de la page, enregistrez :
// - La date et l'heure
// - L'adresse IP du visiteur ($_SERVER['REMOTE_ADDR'])
// Format suggéré : "[2024-01-15 14:30:00] Visite depuis 127.0.0.1"


// TODO 10 : Affichez le contenu du fichier de log
// if (file_exists($fichierLog)) {
//     echo "<pre>" . file_get_contents($fichierLog) . "</pre>";
// }


// ============================================
// AFFICHAGE DU FICHIER CRÉÉ
// ============================================
echo "<h2>Contenu du fichier journal.txt</h2>";

if (file_exists($fichier)) {
    echo "<pre>" . htmlspecialchars(file_get_contents($fichier)) . "</pre>";
} else {
    echo "<p>Le fichier n'existe pas encore. Complétez les TODO !</p>";
}

?>

