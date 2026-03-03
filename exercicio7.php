<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio7</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio 7</h1>
<h1>Lista Vanessa</h1>
<form method="post">
<div class="mb-3">
              <label for="" class="form-label">informe um numero</label>
              <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
            </div>
              
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Lê o valor enviado no formulário
    $fahrenheitEntrada = $_POST['fahrenheit'];

    // Aceitar vírgula como decimal
    $fahrenheitNormalizado = str_replace(",", ".", $fahrenheitEntrada);

    // Converte para número
    $fahrenheit = floatval($fahrenheitNormalizado);

    // Fórmula: C = (F - 32) * 5/9
    $celsius = ($fahrenheit - 32) * 5 / 9;

    // Exibe o resultado
    echo "A temperatura em Celsius é: " . $celsius;
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>



