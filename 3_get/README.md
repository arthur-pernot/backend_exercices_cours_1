# Exercice 3 : La méthode GET

## Objectif
Apprendre à récupérer des données passées dans l'URL via la méthode GET.

## Instructions
1. Récupérez un paramètre `nom` passé dans l'URL
2. Vérifiez si le paramètre existe avec `isset()`
3. Si le paramètre existe, affichez "Bonjour [nom] !"
4. Sinon, affichez "Bonjour visiteur !"
5. Ajoutez un paramètre `age` et affichez un message différent si l'âge est >= 18

## Comment tester
Accédez à la page avec des paramètres dans l'URL :
- `index.php?nom=Jean`
- `index.php?nom=Marie&age=25`

## Aide
- Récupérer une variable GET : `$_GET['nom']`
- Vérifier si elle existe : `isset($_GET['nom'])`

