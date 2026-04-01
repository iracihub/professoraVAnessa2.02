<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio 1</h1>
<form method="post">
<div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div><div class="mb-3">
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
$menor = null;
$posicaoMenor = -1;

for ($i = 1; $i <= 7; $i++) {
    echo "Digite o $iº número: ";
    $linha = trim(fgets(STDIN));

    // Converte para float (aceitando vírgula e ponto)
    $linha = str_replace(',', '.', $linha);
    if (!is_numeric($linha)) {
        echo "Entrada inválida. Tente novamente.\n";
        $i--; // repete esta posição
        continue;
    }

    $valor = (float)$linha;

    if ($i === 1) {
        // Primeiro valor define o menor inicial
        $menor = $valor;
        $posicaoMenor = 1; // posição 1-based
    } else {
        if ($valor < $menor) {
            $menor = $valor;
            $posicaoMenor = $i;
        }
    }
}

echo "Menor valor: $menor\n";
echo "Posição do menor valor (na sequência): $posicaoMenor\n";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>