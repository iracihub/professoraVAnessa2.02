<h1>exercicio15</h1>
<form method="post">
<div class="mb-3">
              <label for="e mail" class="form-label">Digite o endereco de e mail</label>
              <input type="text" id="e mail" name="e mail" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
echo "Digite o e-mail: ";
$email = trim(fgets(STDIN));

$partes = explode("@", $email);

// Mostra apenas o domínio
if (count($partes) == 2) {
    echo $partes[1] . "\n";
}
?>






