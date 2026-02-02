<?php
// debug10_filtre_type.php
$produits = [
  ["nom" => "Câble", "prix" => "9.99"],
  ["nom" => "Hub", "prix" => "19.90"],
  ["nom" => "Chargeur", "prix" => "24.90"]
];

$seuil = 20;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Debug 10</title>
  <style>body{font-family:Arial;margin:24px}.item{padding:8px 10px;border:1px solid #eee;border-radius:10px;margin-top:8px}</style>
</head>
<body>
  <h1>Produits ≤ 20€</h1>

  <?php
    foreach ($produits as $p) {
      if ($p["prix"] <= $seuil) {
        echo '<div class="item">' . $p["nom"] . ' — ' . $p["prix"] . '€</div>';
      }
    }
  ?>
</body>
</html>
