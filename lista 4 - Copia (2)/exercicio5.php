<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio 5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio 5</h1>
<form method="post">
<div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
// Só calcula depois que o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numero = $_POST["numero"]; // Lê o valor enviado pelo método POST

    $raiz = sqrt($numero);      // Calcula a raiz quadrada

    echo "<p>A raiz quadrada de $numero é $raiz</p>";
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>