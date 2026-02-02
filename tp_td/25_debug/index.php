<?php
$email = "";
$erreurs = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"] ?? "";

  if ($email === "" || strpos($email, "@") === false) {
    $erreurs[] = "Email invalide";
  }

  $success = true;
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Hard 5</title>
  <style>
    body{font-family:Arial;margin:24px}
    .card{border:1px solid #ddd;border-radius:12px;padding:16px;max-width:520px}
    .error{background:#ffe1e1;padding:10px;border-radius:10px}
    .ok{background:#e7f7e7;padding:10px;border-radius:10px}
  </style>
</head>
<body>
  <div class="card">
    <h1>Newsletter</h1>

    <?php if ($success): ?>
      <div class="ok">Inscription réussie</div>
    <?php endif; ?>

    <?php if (!empty($erreurs)): ?>
      <div class="error">
        <ul>
          <?php foreach ($erreurs as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="post">
      <input name="email" value="<?= htmlspecialchars($email) ?>" placeholder="email">
      <button>OK</button>
    </form>
  </div>
</body>
</html>
