
<?php ?>

<?php
    $temperatura = $_POST["temperatura"];
    $tempEntrada = $_POST["tempEntrada"];
    $tempSaida = $_POST["tempSaida"];

    $resultado=0;
    if ($tempEntrada=="C") {
        if ($tempSaida == "K") {
            $resultado = $temperatura+273.15;
        } elseif ($tempSaida == "F") {
            $resultado = ($temperatura*9/5)+32;
        } else {
            $resultado = $temperatura;
        }
    }
    if ($tempEntrada=="K") {
        if ($tempSaida == "C") {
            $resultado = 273.15-$temperatura;
        } elseif ($tempSaida == "F") {
            $resultadoC = 273.15-$temperatura;
            $resultado = ($resultadoC*9/5)+32;
        } else {
            $resultado = $temperatura;
        }
    }
    if ($tempEntrada=="F") {
        if ($tempSaida == "C") {
            $resultado = ($temperatura-32)*5/9;
        } elseif ($tempSaida == "K") {
            $resultadoF = ($temperatura*9/5)+32;
            $resultado = $resultadoF+273;
        } else {
            $resultado = $temperatura;
        }
    }

?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Temperatura</th>
                <th>Temperatura</th>
            </tr>
            <tr>
                <td><?php echo $temperatura."º".$tempEntrada ?></td>
                <td><?php echo $resultado."º".$tempSaida ?></td>

            </tr>
        </table>
    </div>
</body>

</html>