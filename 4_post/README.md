# Exercice 4 : La méthode POST

## Objectif
Apprendre à récupérer des données envoyées via un formulaire avec la méthode POST.

## Instructions
1. Créez un formulaire HTML avec les champs : nom, email, message
2. Le formulaire doit utiliser la méthode POST
3. Récupérez les données envoyées avec `$_POST`
4. Vérifiez que les champs ne sont pas vides
5. Affichez un récapitulatif des informations saisies

## Différence GET vs POST
- GET : données visibles dans l'URL, limité en taille
- POST : données invisibles, pas de limite de taille, plus sécurisé

## Aide
- Récupérer une variable POST : `$_POST['nom']`
- Vérifier si le formulaire a été soumis : `$_SERVER['REQUEST_METHOD'] == 'POST'`

