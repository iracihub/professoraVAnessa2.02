<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicionumeros.php</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicionumeros.php</h1>
<form method="post">
<div class="mb-3">
              <label for="numero" class="form-label">Informe o primeiro numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o segundo numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o terceiro numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o quarto numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o quinto numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o sexto numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">informe o sétimo numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
// Programa enxuto: lê 7 números, encontra o menor e sua posição.

// Quando o formulário for enviado:
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numeros = [];
    $i = 0;

    // Lê 7 números usando DO...WHILE
    
    do {
        $numeros[$i] = $_POST["n$i"];
        $i++;
    } while ($i < 7);

    // Define o primeiro como menor inicialmente
    $menor = $numeros[0];
    $pos  = 1;
    
// Percorre usando FOR para achar o menor
    for ($j = 1; $j < 7; $j++) {
        if ($numeros[$j] < $menor) {
            $menor = $numeros[$j];
            $pos = $j + 1; // posição 1-based
        }
    }

    echo "<h3>Menor valor: $menor</h3>";
    echo "<h3>Posição: $pos</h3>";
    
}
?>

<!-- Formulário simples -->
<form method="post">
    <?php
    // Gera 7 campos com FOR
    for ($k = 0; $k < 7; $k++) {
        echo "Número ".($k+1).": 
        <input type='number' name='n$k' required><br><br>";
    }
    ?>
    <button type="submit">Enviar</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>