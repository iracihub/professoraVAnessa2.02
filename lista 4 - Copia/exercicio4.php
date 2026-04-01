<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio 4</h1>
<form method="post">
<div class="mb-3">
              <label for="dia" class="form-label">Digite o dia</label>
              <input type="number" id="dia" name="dia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="mes" class="form-label">digite o mês</label>
              <input type="text" id="mes" name="mes" class="form-control" required="">
            </div><div class="mb-3">
              <label for="ano" class="form-label">Digite o ano</label>
              <input type="text" id="ano" name="ano" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitização simples
        $dia = isset($_POST['dia']) ? (int)$_POST['dia'] : 0;
        $mes = isset($_POST['mes']) ? (int)$_POST['mes'] : 0;
        $ano = isset($_POST['ano']) ? (int)$_POST['ano'] : 0;

        // Monta string no formato dd/mm/aaaa
        $dataStr = sprintf('%02d/%02d/%04d', $dia, $mes, $ano);

        // Validação 1: formato básico dd/mm/aaaa (regex)
        $formatoOk = preg_match('/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(\d{4})$/', $dataStr) === 1;

        // Validação 2: existência da data (considera meses, dias e ano bissexto)
        $dataOk = checkdate($mes, $dia, $ano);

        if ($formatoOk && $dataOk) {
            echo "<p class='ok'>Data válida: <strong>{$dataStr}</strong></p>";
        } else {
            echo "<p class='erro'>Data inválida: <strong>{$dataStr}</strong></p>";
            if (!$formatoOk) {
                echo "<p class='erro'>Formato esperado: dd/mm/aaaa (ex.: 05/11/2026).</p>";
            } elseif (!$dataOk) {
                echo "<p class='erro'>A combinação dia/mês/ano não existe no calendário.</p>";
            }
        }
    }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>