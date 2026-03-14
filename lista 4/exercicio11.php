<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio11</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio11</h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Informe o valor</label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe o valor digitado
    $entrada = $_POST["valor"];
    
// Troca vírgula por ponto (aceita 10,50 e 10.50)
    $entrada = str_replace(",", ".", $entrada);

    // Converte para número flutuante
    $numero = floatval($entrada);

    // Formata para moeda brasileira
    $moeda = number_format($numero, 2, ",", ".");
    
    echo "<p>Valor digitado: $numero</p>";
    echo "<p>Valor em moeda brasileira: <strong>R$ $moeda</strong></p>";
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>