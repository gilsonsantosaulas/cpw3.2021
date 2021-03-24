<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="CtlTemp.php" method="post">
                <div class="form-group">
                    <label for="">Temperatura</label>
                    <input type="text" name="temperatura" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Entrada</label>
                    <select name="tempEntrada" id="" class="form-control">
                        <option value="C">C</option>
                        <option value="K">K</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Saída</label>
                    <select name="tempSaida" id="" class="form-control">
                        <option value="C">C</option>
                        <option value="K">K</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Converter</button>
                </div>
            </form>
        </div>
    </body>
</html>