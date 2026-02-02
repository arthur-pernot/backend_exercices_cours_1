<?php
$produits = [
  ["nom" => "Cahier", "cat" => "Papeterie"],
  ["nom" => "Stylo", "cat" => "Papeterie"],
  ["nom" => "Shampoing", "cat" => "Hygiène"],
];

$cat = $_GET["cat"] ?? "Papeterie ";

$resultats = [];
foreach ($produits as $p) {
  if ($p["cat"] === $cat) {
    $resultats[] = $p;
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Furtif 1</title>
  <style>body{font-family:Arial;margin:24px}.item{padding:8px 10px;border:1px solid #eee;border-radius:10px;margin-top:8px}</style>
</head>
<body>
  <h1>Filtre catégorie</h1>
  <p>Catégorie demandée: <code><?= htmlspecialchars($cat) ?></code></p>
  <p><a href="?cat=Papeterie">cat=Papeterie</a> · <a href="?cat=Papeterie%20">cat=Papeterie␠</a></p>

  <?php if (empty($resultats)): ?>
    <p><em>Aucun résultat (pourtant ça devrait marcher).</em></p>
  <?php endif; ?>

  <?php foreach ($resultats as $p): ?>
    <div class="item"><?= htmlspecialchars($p["nom"]) ?></div>
  <?php endforeach; ?>
</body>
</html>
