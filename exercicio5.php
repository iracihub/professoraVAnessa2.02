<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio5</h1>
<form method="post">
<div class="mb-3">
              <label for="n1" class="form-label">informe o numero</label>
              <input type="number" id="n1" name="n1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="n2" class="form-label">informe o numero</label>
              <input type="number" id="n2" name="n2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="n3" class="form-label">informe o numero</label>
              <input type="number" id="n3" name="n3" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Lendo os valores enviados pelo formulário
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    // Somando os 3 números
    $soma = $n1 + $n2 + $n3;

    // Calculando a média
    $media = $soma / 3;
    
    // Exibindo o resultado
    echo "<h2>A soma dos números é: $soma</h2>";
    echo "<h2>A média é: $media</h2>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>