<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "loja";
    $conexao = new mysqli($host, $usuario, $senha, $bd);

    $nome = "Mouse";
    $descricao = "Mouse 3 botões sem fio";
    $preco = 35.00;

    $sql = "insert into produto(nome, descricao, preco) values(?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("ssd", $nome, $descricao, $preco);
    $sqlprep->execute();
    
?>


