
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Arredondamentos (ceil, floor, round)</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 2rem; }
    input { padding: .4rem; width: 14rem; }
    .erro { color: #b00020; }
    .ok { margin-top: 1rem; }
    code { background: #f6f8fa; padding: .1rem .3rem; border-radius: 4px; }
  </style>
</head>
<body>
  <h1>Arredondamentos em PHP</h1>

  <form method="post">
    <label>
      Digite um número (float):
      <input type="text" name="numero" placeholder="Ex.: 3.14 ou 2,5" required>
    </label>
    <button type="submit">Calcular</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // 1) Lê a entrada como string
      $entrada = trim($_POST['numero'] ?? '');

      // 2) Aceita vírgula como separador decimal (ex.: 2,5)
      $entradaNorm = str_replace(',', '.', $entrada);

      // 3) Validação: precisa ser numérico para virar float
      if ($entrada === '' || !is_numeric($entradaNorm)) {
          echo "<p class='erro'>Por favor, digite um número de ponto flutuante válido (ex.: 3.14 ou 2,5).</p>";
      } else {
          // 4) Converte para float
          $n = floatval($entradaNorm);

          // 5) Arredondamentos
          $paraCima  = ceil($n);   // arredonda para cima (→ +∞)
          $paraBaixo = floor($n);  // arredonda para baixo (→ −∞)
          $normal    = round($n);  // arredonda normalmente (metades para cima por padrão)

          // 6) Exibe resultados
          echo "<div class='ok'>";
          echo "<p>Número (float) informado: <strong>{$n}</strong></p>";
          echo "<p>Arredondado para cima <code>ceil()</code>: <strong>{$paraCima}</strong></p>";
          echo "<p>Arredondado para baixo <code>floor()</code>: <strong>{$paraBaixo}</strong></p>";
          echo "<p>Arredondado normalmente <code>round()</code>: <strong>{$normal}</strong></p>";
          echo "</div>";
      }
  }
  ?>
</body>
</html>
