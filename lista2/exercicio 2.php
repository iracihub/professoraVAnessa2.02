<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio 2</h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Digite o valor 1</label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor" class="form-label">Digite o valor 2</label>
              <input type="text" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

   
<?php

$valor1 = (int) readline("Digite o primeiro valor: ");
$valor2 = (int) readline("Digite o segundo valor: ");

$soma = $valor1 + $valor2;

if ($valor1 === $valor2) {
    $soma *= 3;
}
 

echo "Resultado: $soma";
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>