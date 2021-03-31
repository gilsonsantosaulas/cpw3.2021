<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "loja";

    $conexao = new mysqli($host, $usuario, $senha, $bd);
    $sql = "insert into produto(nome, descricao, preco)";
    $sql = $sql . " values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("ssd", 
                        $_POST["nome"],
                        $_POST["descricao"],
                        $_POST["preco"]
    );
    $sqlprep->execute();

?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h4>Produto inserido.</h4>
    </body>
</html>

 