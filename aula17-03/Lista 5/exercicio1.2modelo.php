<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>exercicio1.2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>exercicio1.2</h1>
<form method="post">
    <?php
    for($i=0;$i<5;$i++)
        echo '<div class="mb-3">
            <label for="contato'.$i.'" class="form-label">Informe o contato</label>
            <input type="text" id="contato'.$i.'" name="contato[]" class="form-control" required="">
        </div>';
    ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    $mapa1 = array('João', "Maria", 3);
    print_r($mapa1);
    echo "<p></p>";
    var_dump($mapa1);
    echo "<p>Contato da posição 2 ".$mapa1[2]."</p>";

    $mapa2[1] = "Vanessa";
    $mapa2[2] = "José";
    $mapa2[3] = "Clara";
    $mapa2[4] = "Maria";
    $mapa2[5] = "João";
    print_r($mapa2);

    $contatos["Vanessa"] = "123456";
    $contatos["José"] = "098765";
    $contatos["Clara"] = "135798";
    $contatos["Maria"] = "097531";
    $contatos["João"] = "246890";
    echo "<p></p>";
    print_r($contatos);

    foreach($contatos as $contato){
        echo "<p>Telefone: $contato </p>";
    }

    foreach($contatos as $chave => $contato){
        echo "<p> Telefone de $chave: $contato </p>";
    }
    //apagar posição
    unset($mapa1[2]);
    print_r($mapa1);

    //funções
    $quantidade = count($mapa2);
    echo "<p>Qtd. elementos mapa 5: $quantidade</p>";
    asort($contatos); //ordenar pelo valor
    ksort($contatos); //ordenar pela chave

