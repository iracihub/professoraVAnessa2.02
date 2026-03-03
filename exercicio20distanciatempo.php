<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio20distanciatempo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio20distanciatempo</h1>
<form method="post">
<div class="mb-3">
              <label for="distancia" class="form-label">Insira a distancia</label>
              <input type="number" id="distancia" name="distancia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="tempo" class="form-label">Insira o tempo</label>
              <input type="number" id="tempo" name="tempo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php

$distancia = $_POST['distancia']; // em km ou metros
$tempo = $_POST['tempo'];         // em horas, minutos etc.

$velocidade = $distancia / $tempo;

echo "Velocidade média: " . $velocidade;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>