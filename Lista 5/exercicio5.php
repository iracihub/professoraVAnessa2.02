<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>exercicio5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>exercicio5</h1>

        <h2>Cadastro de Livros</h2>

        <form method="post">
            <?php for ($i = 1; $i <= 5; $i++) {?>
                <h3>Livro <?php echo $i; ?></h3>
                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" name="Titulo[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Quantidade em estoque:</label>
                    <input type="number" name="Quantidade[]" class="form-control" required>
                </div>
            <?php } ?>

            <button type="submit" class="btn btn-primary">Processar Livros</button>
        </form>

        <br>

        <?php
        $resultado = "";
        $alertas   = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $titulos     = $_POST['Titulo'];
            $quantidades = $_POST['Quantidade'];

            $livros = [];

            for ($i = 0; $i < 5; $i++) {
                $livros[$titulos[$i]] = $quantidades[$i];

                if ($quantidades[$i] < 5) {
                    $alertas .= "Livro com estoque baixo: <strong>{$titulos[$i]}</strong><br>";
                }
            }

            ksort($livros);

            $resultado .= "<h3>Lista de Livros Ordenada pelo Título</h3>";

            foreach ($livros as $titulo => $quantidade) {
                $resultado .= "Livro: $titulo | Quantidade em estoque: $quantidade<br>";
            }

            if ($alertas != "") {
                echo "<h3>Alertas</h3>";
                echo $alertas;
            }

            echo $resultado;
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>