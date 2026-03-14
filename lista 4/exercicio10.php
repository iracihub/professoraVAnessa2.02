<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio10</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio10</h1>
<form method="post">
<div class="mb-3">
              <label for="frase" class="form-label">Escreva a frase</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div><div class="mb-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
</form>


<h2>Digite seu nome completo</h2>

<form method="post">
    <input type="text" name="nome" placeholder="Ex.: Ana Maria Souza" required>
    <button type="submit">Enviar</button>

<?php
if ($_POST) {

    // Lê o nome digitado pelo usuário
    $nome = trim($_POST["nome"]);

    // Separa o nome em palavras
    $palavras = explode(" ", $nome);

    $iniciais = "";

    // Pega a primeira letra de cada palavra
    foreach ($palavras as $p) {
        if ($p !== "") {
            $iniciais .= strtoupper($p[0]);  // deixa maiúsculo
        }
    }    
    echo "<p>Nome digitado: $nome</p>";
    echo "<p>Iniciais: <strong>$iniciais</strong></p>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>