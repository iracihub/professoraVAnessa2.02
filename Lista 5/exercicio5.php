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
    // aqui o laço for executa um bloco de codigo definido por um numero(5), no caso, 5 vezes// 
 <?php   for ($i = 0; $i < 5; $i++) {
        $livros[$titulos[$i]] = $quantidades[$i];

        // verifica se o estoque está baixo
        if ($quantidades[$i] < 5) {
            $alertas .= "Livro com estoque baixo: <strong>{$titulos[$i]}</strong><br>";
        }
    }

?>

<div class="mb-3">
              <label for="livro[]" class="form-label">Informe o livro[]</label>
              <input type="text" id="livro[]" name="livro[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Titulo[]" class="form-label">Informe o titulo[]</label>
              <input type="text" id="Titulo[]" name="Titulo[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Quantidade[]" class="form-label">Informe a quantidade[]</label>
              <input type="text" id="Quantidade[]" name="Quantidade[]" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
$resultado = "";
$alertas = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulos     = $_POST['titulo'];
    $quantidades = $_POST['quantidade'];

    // mapa: titulo => quantidade
    $livros = [];

    for ($i = 0; $i < 5; $i++) {
        $livros[$titulos[$i]] = $quantidades[$i];

        // verifica se o estoque está baixo
        if ($quantidades[$i] < 5) {
            $alertas .= "Livro com estoque baixo: <strong>{$titulos[$i]}</strong><br>";
        }
    }

    // ao ordenar pelo titulo do livro, cria-se uma chave
    ksort($livros);

    $resultado .= "<h3>Lista de Livros Ordenada pelo Título</h3>";

    foreach ($livros as $titulo => $quantidade) {
        $resultado .= "Livro: $titulo | Quantidade em estoque: $quantidade<br>";
    }
}
?>

<h2>Cadastro de Livros</h2>

<form method="POST">

<?php for ($i = 1; $i <= 5; $i++) { ?>
    <h3>Livro <?php echo $i; ?></h3>

    Título:
    <input type="text" name="titulo[]" required><br>

    Quantidade em estoque:
    <input type="number" name="quantidade[]" required><br><br>
<?php } ?>

<button type="submit">Processar Livros</button>

</form>

<br>

<?php
    if ($alertas != "") {
        echo "<h3>Alertas</h3>";
        echo $alertas;
    }

    echo "<br>";
    echo $resultado;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>