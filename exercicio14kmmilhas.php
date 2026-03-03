<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio14kmmilhas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio14kmmilhas</h1>
<form method="post">
<div class="mb-3">
              <label for="km" class="form-label">Informe os kms</label>
              <input type="number" id="km" name="km" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe o valor enviado via POST
    $km = $_POST["km"];

    // Verifica se o valor é numérico
    if (!is_numeric($km)) {
        echo "Por favor, informe um valor numérico.";
        exit;
    }

    // Converte km para milhas (1 km = 0.621371 milhas)
    $milhas = $km * 0.621371;

    // Exibe o resultado
    echo "{$km} km equivalem a {$milhas} milhas.";

} else {
    echo "Envie os dados usando POST.";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>