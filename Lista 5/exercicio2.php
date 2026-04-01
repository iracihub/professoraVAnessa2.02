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
<?php
    for ($i = 1; $i <= 5; $i++) 
    echo '<div class="mb-3">
              <label for="Nome[]" class="form-label">Insira o Nome</label>
              <input type="text" id="Nome[]" name="Nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Nota1[]" class="form-label">Insira Nota1[]</label>
              <input type="text" id="Nota1[]" name="Nota1[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Nota2[]" class="form-label">Insira Nota2[]</label>
              <input type="text" id="Nota2[]" name="Nota2[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Nota3[]" class="form-label">Insira Nota3[]</label>
              <input type="text" id="Nota3[]" name="Nota3[]" class="form-control" required="">
            </div>'
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $alunos = [];

    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome"][$i];
        $nota1 = $_POST["nota1"][$i];
        $nota2 = $_POST["nota2"][$i];
        $nota3 = $_POST["nota3"][$i];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        // mapa: nome => média
        $alunos[$nome] = $media;
    }

    // ordena pelas médias (valores) do maior para o menor
    arsort($alunos);

    $resultado .= "<h3>Alunos ordenados pela média</h3>";

    foreach ($alunos as $nome => $media) {
        $resultado .= $nome . " - Média: " . number_format($media, 2) . "<br>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>

