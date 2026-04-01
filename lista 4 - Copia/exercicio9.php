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
<div class="mb-3">
              <label for="frase" class="form-label">Escreva a frase</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1) Lê a frase enviada pelo formulário (POST)
    $frase = $_POST['frase'] ?? '';

    // 2) Remove espaços apenas do início e do final
    $fraseSemBordas = trim($frase);

    // 3) Remove TODOS os espaços da frase (inclui espaços no meio)
    //    Para iniciantes, dá para começar com str_replace(' ', '', ...)
    
//    Se quiser remover QUALQUER espaço em branco (espaço, tab, quebra de linha), use preg_replace abaixo.
    $fraseSemEspacosSomenteEspaco = str_replace(' ', '', $frase);
    // Versão mais completa (remove todo tipo de “whitespace”):
    $fraseSemQualquerEspaco = preg_replace('/\s+/', '', $frase);

    // Exibição
    echo "<p><strong>Frase original:</strong> <pre style='display:inline;'>".htmlspecialchars($frase)."</pre></p>";
    echo "<p><strong>Sem espaços no início e no final (trim):</strong> <prestyle='display:inline;'>".htmlspecialchars($fraseSemBordas)."</pre></p>";
    echo "<p><strong>Sem todos os espaços (apenas o caractere espaço):</strong> <pre style='display:inline;'>".htmlspecialchars($fraseSemEspacosSomenteEspaco)."</pre></p>";
    echo "<p><strong>Sem todos os espaços (qualquer espaço em branco \\s):</strong> <pre style='display:inline;'>".htmlspecialchars($fraseSemQualquerEspaco)."</pre></p>";
}
?>

</body>
</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>