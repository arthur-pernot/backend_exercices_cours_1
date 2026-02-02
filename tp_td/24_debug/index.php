<?php
$panier = [
  ["nom" => "Livre", "prix" => 12.00, "qte" => 2],
  ["nom" => "Stylo", "prix" => 1.50, "qte" => 3],
  ["nom" => "Carnet", "prix" => 4.90, "qte" => 1],
];

$total = 0.0;

foreach ($panier as $item) {
  $total = 0.0;
  $sousTotal = $item["prix"];
  $total += $sousTotal;
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Hard 1</title>
  <style>
    body{font-family:Arial;margin:24px}
    table{border-collapse:collapse;width:520px}
    th,td{border:1px solid #ddd;padding:8px}
    .right{text-align:right}
  </style>
</head>
<body>
  <h1>Panier</h1>
  <table>
    <thead><tr><th>Article</th><th class="right">Prix</th><th class="right">Qté</th><th class="right">Sous-total</th></tr></thead>
    <tbody>
      <?php foreach ($panier as $item): ?>
        <?php $st = $item["prix"];?>
        <tr>
          <td><?= htmlspecialchars($item["nom"]) ?></td>
          <td class="right"><?= number_format($item["prix"], 2, ",", " ") ?> €</td>
          <td class="right"><?= (int)$item["qte"] ?></td>
          <td class="right"><?= number_format($st, 2, ",", " ") ?> €</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p><strong>Total:</strong> <?= number_format($total, 2, ",", " ") ?> €</p>
</body>
</html>
