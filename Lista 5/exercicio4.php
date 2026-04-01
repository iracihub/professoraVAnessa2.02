<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>exercicio4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>exercicio4</h1>
        <form method="post">

            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="mb-3">
                    <label class="form-label">Informe o Item[]</label>
                    <input type="text" name="Item[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Informe o nome[]</label>
                    <input type="text" name="Nome[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Informe o preco[]</label>
                    <input type="text" name="Preco[]" class="form-control" required>
                </div>
            <?php } ?>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        $resultado = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nomes  = $_POST['Nome'];
            $precos = $_POST['Preco'];

            $itens = [];

            for ($i = 0; $i < 5; $i++) {
                $precoFinal = $precos[$i] * 1.15;
                $itens[$nomes[$i]] = $precoFinal;
            }

            asort($itens);

            $resultado .= "<h3>Itens ordenados pelo preço com imposto</h3>";

            foreach ($itens as $nome => $preco) {
                $resultado .= $nome . " - Preço com imposto: R$ "
                    . number_format($preco, 2, ',', '.') . "<br>";
            }

            echo $resultado;
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>