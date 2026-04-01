
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio1</h1>
<form method="post">
    <?php
        for ($i = 0; $i < 5; $i++) 
            echo '<div class="mb-3">
              <label for="nome[]" class="form-label">Insira o nome</label>
              <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="tel[]" class="form-label">insira o tel</label>
              <input type="text" id="tel[]" name="tel[]" class="form-control" required="">
            </div>'
    ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER ['REQUEST_METHOD']== "POST") 
    {
    $contatos = [];

    for ($i = 0; $i < 5; $i++) {
        $nome = $_POST['nome'][$i];
        $tel  = $_POST['tel'][$i];

if (isset($contatos[$nome]) || in_array($tel, $contatos)) 
    {
            echo "Erro: nome ou telefone duplicado.";
            exit;
    }
        $contatos[$nome] = $tel;
                                }
    ksort($contatos);

    echo "<h3>Contatos</h3>";

foreach ($contatos as $n => $t) {
        echo "$n - $t<br>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>

