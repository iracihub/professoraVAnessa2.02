<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio12</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio12</h1>
<form method="post">
<div class="mb-3">
              <label for="senha" class="form-label">Informe a senha</label>
              <input type="password" id="senha" name="senha" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php

// Conjunto de caracteres possíveis
$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

// Tamanho da senha
$tamanho = 8;

// Variável que guardará a senha final
$senha = '';

// Gera a senha
for ($i = 0; $i < $tamanho; $i++) {

$indice = rand(0, strlen($caracteres) - 1); // posição aleatória
    $senha .= $caracteres[$indice];            // adiciona o caractere
}

// Exibe a senha gerada
echo "Senha gerada: <strong>$senha</strong>";

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>