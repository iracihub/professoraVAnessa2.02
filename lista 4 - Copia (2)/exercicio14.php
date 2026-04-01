<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio14</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio14</h1>
<form method="post">
<div class="mb-3">
              <label for="palavra" class="form-label">Informe a palavra</label>
              <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
if ($_POST) {

    // Lê a palavra digitada
    $palavra = $_POST["palavra"];

    // Deixa tudo em minúsculas
    $palavra = strtolower($palavra);

    // Inverte a palavra
    $invertida = strrev($palavra);

    // Verifica se é palíndromo

if ($palavra == $invertida) {
        echo "<p>A palavra <strong>$palavra</strong> é um palíndromo ✅</p>";
    } else {
        echo "<p>A palavra <strong>$palavra</strong> não é um palíndromo ❌</p>";
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>