<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio9</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio9</h1>
<form method="post">
<label>Insira o numero</label>
<input type="number" name="raio">
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Lê o valor do raio enviado pelo formulário
    $raio = $_POST['raio'];

    // Fórmula da área do círculo: A = π * r^2
    // Usando a constante M_PI do PHP para π
    $area = M_PI * ($raio * $raio);

    // Exibe os resultados
    echo "Raio: $raio <br>";
    
    echo "Área do círculo: $area";
    }
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>