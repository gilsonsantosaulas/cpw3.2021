

<?php
    $msg = "";
    if ($_POST["titulo"]=="") {
        $msg = "Título não prenchido. ";
    }
    if ($_POST["qtdExemplares"]=="") {
        $msg = $msg . "Quantidade de Exemplares não preenchido. ";
    }
    if ($_POST["descricao"]=="") {
        $msg = $msg . "Descrição não preenchido.";
    }
    if($msg=="") {
        $msg = "O livro foi salvo.";
    }


?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Qtde Exemplares</th>
                    <th>Editora</th>
                    <th>Autor</th>
                </tr>
                <tr>
                    <td><?php echo $_POST["titulo"]; ?></td>
                    <td><?php echo $_POST["descricao"]; ?></td>
                    <td><?php echo $_POST["qtdExemplares"]; ?></td>
                    <td><?php echo $_POST["editora"]; ?></td>
                    <td><?php echo $_POST["autor"]; ?></td>
                </tr>
            </table>
            <h4> <?php echo $msg; ?> </h4>
        </div>
    </body>
</html>

 