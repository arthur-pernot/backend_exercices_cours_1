<?php
// Exercice 4 : La méthode POST
// Objectif : Récupérer et traiter des données envoyées par formulaire

// TODO 1 : Vérifiez si le formulaire a été soumis (méthode POST)
// Utilisez : $_SERVER['REQUEST_METHOD'] == 'POST'


// TODO 2 : Si le formulaire est soumis, récupérez les valeurs
// $nom = $_POST['nom'];
// $email = $_POST['email'];
// $message = $_POST['message'];


// TODO 3 : Vérifiez que les champs ne sont pas vides avec !empty()


// TODO 4 : Affichez un récapitulatif si tout est rempli
// Sinon, affichez un message d'erreur


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice POST</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>Formulaire de contact</h1>
    
    <!-- TODO 5 : Complétez le formulaire avec method="post" et action="" -->
    <form method="" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4"></textarea>
        
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>

