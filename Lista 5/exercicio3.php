<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio3</h1>
<form method="post">
<?php

for ($i = 0; $i < 5; $i++) 
    echo '<div class="mb-3">
              <label for="Produto[]" class="form-label">Informe o produto[]</label>
              <input type="text" id="Produto[]" name="Produto[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Codigo[]" class="form-label">Informe o codigo[]</label>
              <input type="text" id="Codigo[]" name="Codigo[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Nome[]" class="form-label">Informe o nome[]</label>
              <input type="text" id="Nome[]" name="Nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Preco[]" class="form-label">Informe o preco[]</label>
              <input type="text" id="Preco[]" name="Preco[]" class="form-control" required="">
            </div>'
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $codigos = $_POST['codigo'];
    $nomes   = $_POST['nome'];
    $precos  = $_POST['preco'];

    // mapa principal
    $produtos = [];

    // leitura dos dados
    for ($i = 0; $i < 5; $i++) {

        $preco = $precos[$i];

        // aplica desconto de 10% se preço > 100
        if ($preco > 100) {
            $preco = $preco * 0.9;
        }

        // mapa aninhado
        $produtos[$codigos[$i]] = [
            'nome'  => $nomes[$i],
            'preco' => $preco
        ];
    }

    // ordena pelo nome do produto
    uasort($produtos, function ($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });

    $resultado .= "<h3>Produtos ordenados pelo nome</h3>";

    foreach ($produtos as $codigo => $dados) {
        $resultado .= "Código: $codigo | ";
        $resultado .= "Nome: {$dados['nome']} | ";
        $resultado .= "Preço: R$ " . number_format($dados['preco'], 2, ',', '.') . "<br>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>