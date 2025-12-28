# Exercice 7 : Manipulation des Dates

## Objectif
Apprendre à manipuler les dates et heures en PHP.

## Instructions
1. Affichez la date et l'heure actuelles dans différents formats
2. Définissez le fuseau horaire sur "Europe/Paris"
3. Créez une date spécifique avec `strtotime()`
4. Calculez la différence entre deux dates
5. Affichez le jour de la semaine en français

## Formats utiles
- `d` : jour (01-31)
- `m` : mois (01-12)
- `Y` : année (4 chiffres)
- `H` : heure (00-23)
- `i` : minutes (00-59)
- `l` : jour de la semaine (en anglais)

## Aide
- Date actuelle : `date("d/m/Y")`
- Timestamp : `time()` ou `strtotime("2024-12-25")`
- Fuseau horaire : `date_default_timezone_set("Europe/Paris")`

