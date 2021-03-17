<?php

    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];
    $nome = $_GET["nome"];
    $media = ($numero1+$numero2+$numero3)/3;
?>


<html>
    <head></head>
    <body>
    
        <h4>Nome: <?php echo $nome; ?> </h4>
        <h4>Média:<?php echo $media; ?> </h4>
    
    </body>
</html> 