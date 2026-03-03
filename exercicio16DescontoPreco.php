<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exericio16DescontoPreco</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exericio16DescontoPreco</h1>
<form method="post">
<div class="mb-3">
              <label for="preco" class="form-label">Informe o preco</label>
              <input type="number" id="preco" name="preco" class="form-control" required="">
            </div><div class="mb-3">
              <label for="desconto" class="form-label">Informe o desconto</label>
              <input type="number" id="desconto" name="desconto" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php

$preco = $_POST['preco'];
$desconto = $_POST['desconto'];

$precoFinal = $preco - ($preco * ($desconto / 100));

echo "Preço final: R$ " . number_format($precoFinal, 2, ',', '.');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
