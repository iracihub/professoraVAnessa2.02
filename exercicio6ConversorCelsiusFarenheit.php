
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>exercicio6ConversorCelsiusFahrenheit</title>
</head>
<body>
  <h1>Conversor de Temperatura</h1>
  <form method="POST" action="">
    <label>Temperatura em Celsius (°C):</label><br>
    <input type="text" name="celsius" required>
    <button type="submit">Converter</button>
  </form>

  
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Lê o valor digitado no formulário
    $celsius = $_POST['celsius'];

    // Fórmula de conversão: F = C * 9/5 + 32
    $fahrenheit = ($celsius * 9/5) + 32;

    // Exibe o resultado
    echo "<h2>$celsius °C equivalem a $fahrenheit °F</h2>";
}
?>


