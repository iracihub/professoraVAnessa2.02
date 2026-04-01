<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contatos</title>
</head>
<body>

<form method="post">
<?php
for ($i = 0; $i < 5; $i++) {
    echo "
    Nome: <input name='nome[]' required>
    Telefone: <input name='tel[]' required><br><br>";

}
?>
<input type="submit" value="Enviar">
</form>

<?php
if ($_POST) {
    $contatos = [];

    for ($i = 0; $i < 5; $i++) {
        $nome = $_POST['nome'][$i];
        $tel  = $_POST['tel'][$i];

if (isset($contatos[$nome]) || in_array($tel, $contatos)) {
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
