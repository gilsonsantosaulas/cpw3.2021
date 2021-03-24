<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="calcula.php" method="POST">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control">
            <label for="">Nota 1</label>
            <input type="text" name="nota1" class="form-control">
            <label for="">Nota 2</label>
            <input type="text" name="nota2" class="form-control">
            <label for="">Nota 3</label>
            <input type="text" name="nota3" class="form-control">
            <label for="">professor</label>
            <input type="text" name="professor" class="form-control">
            <button type="submit" class="btn btn-default">Calcular</button>
        </form>
    </div>
</body>

</html>