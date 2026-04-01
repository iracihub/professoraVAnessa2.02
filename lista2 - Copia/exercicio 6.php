<h1>exercicio 6.php</h1>
<form method="post">
<div class="mb-3">
              <label for="numero" class="form-label">Informe o numero</label>
              <input type="number" id="numero" name="numero" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = (int) $_POST['numero'];

    for ($i = 1; $i <= $numero; $i++) {
        echo $i . "<br>";
    }
}
?>
