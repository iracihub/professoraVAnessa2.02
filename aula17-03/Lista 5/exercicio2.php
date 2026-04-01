<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio2</h1>
<form method="post">
<div class="mb-3">
              <label for="[]nome" class="form-label">Informe o nome</label>
              <input type="text" id="[]nome" name="[]nome" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
// Recebe os dados do formulário
$nomes  = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

// Mapa: nome => média
$alunos = [];

// FOR para processar os dados
for ($i = 0; $i < count($nomes); $i++) {

    $nome = trim($nomes[$i]);

    // Cálculo da média
    $media = ($nota1[$i] + $nota2[$i] + $nota3[$i]) / 3;

    // Adiciona ao mapa
    $alunos[$nome] = $media;
}

// Ordena pela média (valores) do MAIOR para o MENOR
arsort($alunos);

// Exibe a lista ordenada
print "<h2>Lista de Alunos (ordenada pela média)</h2>";

foreach ($alunos as $nome => $media) {
    print "Aluno: $nome - Média: " . number_format($media, 2) . "<br>";
}

// Mostra a estrutura do array
print "<h3>Estrutura do array (var_dump)</h3>";
print "<pre>";
var_dump($alunos);
print "</pre>";
?>
``
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>





