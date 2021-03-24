<?php 
    $media = ($_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"])/3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Nome: <?php echo $_POST["nome"]; ?></h4>
    <h4>Média: <?php echo $media; ?></h4>
    <h4>Professor: <?php echo $_POST["professor"]; ?></h4>
</body>
</html>