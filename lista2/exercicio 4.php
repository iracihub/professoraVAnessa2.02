<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Valor Produto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Valor Produto</h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Informar valor</label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
// valor do produto
$preco = (float) readline("Digite o valor do produto: ");

//se o preço  é maior que 100
if ($preco > 100) {
    $preco = $preco * 1.15; // acréscimo de 15%
}

// resultado
echo "Valor final do produto: R$ " . number_format($preco, 2, ',', '.');
?>
``

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>