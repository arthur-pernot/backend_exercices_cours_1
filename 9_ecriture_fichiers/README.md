# Exercice 9 : Écriture dans des Fichiers

## Objectif
Apprendre à créer des fichiers et écrire du contenu dedans.

## Instructions
1. Créez un nouveau fichier `journal.txt`
2. Écrivez plusieurs lignes dedans
3. Ajoutez du contenu à la fin du fichier (mode append)
4. Créez un mini système de log qui enregistre la date et l'heure de chaque visite

## Modes d'écriture
- `w` : écriture, écrase le fichier existant
- `a` : ajout à la fin du fichier
- `w+` : lecture et écriture, écrase
- `a+` : lecture et ajout

## Aide
- Écrire : `fwrite($handle, "texte")`
- Écriture simple : `file_put_contents("fichier.txt", "contenu")`
- Ajouter : `file_put_contents("fichier.txt", "contenu", FILE_APPEND)`

## Attention
Les fichiers créés par PHP appartiennent au serveur web. Assurez-vous que le dossier a les droits d'écriture.

