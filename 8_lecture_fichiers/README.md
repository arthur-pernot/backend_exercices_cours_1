# Exercice 8 : Lecture de Fichiers

## Objectif
Apprendre à ouvrir, lire et fermer des fichiers en PHP.

## Instructions
1. Vérifiez si le fichier `data.txt` existe
2. Ouvrez le fichier en mode lecture
3. Lisez et affichez le contenu ligne par ligne
4. Fermez le fichier
5. Utilisez `file_get_contents()` pour une lecture simple

## Fichier de test
Un fichier `data.txt` est fourni avec quelques lignes de texte.

## Modes d'ouverture
- `r` : lecture seule
- `w` : écriture (écrase le fichier)
- `a` : ajout à la fin
- `r+` : lecture et écriture

## Aide
- Vérifier existence : `file_exists("fichier.txt")`
- Ouvrir : `$f = fopen("fichier.txt", "r")`
- Lire une ligne : `fgets($f)`
- Fin de fichier : `feof($f)`
- Fermer : `fclose($f)`

