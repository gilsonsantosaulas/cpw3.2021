<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";
    $conexao = new mysqli($host, $usuario, $senha, $bd);
    $sql = "insert into usuarios(nome, email, senha, perfil) values(?,?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("ssss", 
                        $_POST["nome"],
                        $_POST["email"],
                        $_POST["senha"],
                        $_POST["perfil"]
    );
    $sqlprep->execute();
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h4>Usuário salvo.</h4>
        </div>
    </body>
</html>

 